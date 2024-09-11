<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Books;
use App\Models\Media;
use App\Events\MailCode;
use App\Mail\Codemailer;
use App\Mail\VerfiyMail;
use App\Enums\GuardEnums;
use App\Traits\ImageTrait;
use App\Events\verifyEvent;
use App\Traits\MethodTrait;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Traits\ResponseTrait;
use Illuminate\Support\Carbon;
use App\Traits\Requests\TestAuth;
use App\Http\Controllers\Controller;
use App\Http\Requests\ForgetRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\ChangePassRequest;
use App\Http\Requests\CodeVerifyRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Traits\validator\ValidatorTrait;


class UsersController extends Controller
{
    use ImageTrait, ValidatorTrait, TestAuth, ResponseTrait, MethodTrait;


    // todo profile page
    public function index()
    {
        return view('Auth.Users.profile');
    }

    // todo login page
    function loginindex()
    {
        return view('Auth.Users.login');
    }

    // todo login page
    function home()
    {
        $title = 'الشائع';
        $book = Books::orderBy('view', 'desc')->with('media_one', 'department', 'user')->get();
        $books = $this->getBooks($book);
        return view('Auth.Users.home', compact('title', 'books'));
    }

    // todo register page
    function registerIndex()
    {
        return view('Auth.Users.regist');
    }
    // todo register page


    // todo verify Email
    public function verfiy(User $user)
    {
        // ? verify the user Email
        event(new verifyEvent($user));
        return redirect()->route('users.loginindex')->with('success', 'Hy Sir : ' . $user->username . ' Verifu Email Succcessfuly');
    }


    // todo Login Users
    public function login(LoginUserRequest $request)
    {
        try {
            $infofield = $this->CheckField($request);
            if (Auth::attempt($infofield['credentials'])) {
                return redirect()->route('homeindex');
            } else {
                return back()->withInput()->withErrors(['password' => 'Invalid credentials']);
            }
        } catch (Exception $ex) {
            return back()->withInput()->withErrors(['error' => $ex->getMessage()]);
        }
    }

    // todo add new account
    public function register(RegisterRequest $request)
    {
        try {
            //! Determine the password
            $password = $request->password ? Hash::make($request->password) : null;
            $customer = User::create([
                'name' => $request->name,
                'username' => Str::slug($request->name) . '_' . strtoupper(Str::random(3)),
                'email' => $request->email,
                'password' => $password,
                'role' => GuardEnums::USER->value
            ]);

            if ($request->has('img')) {
                $this->Addmedia($customer, $request->img);
            } else {
                $this->Addmedia($customer, '/images/users/users.png');
            }

            // todo send mail to user for verify email
            Mail::to($request->email)->send(new VerfiyMail($customer));
            return redirect('/users/login')->with('success', "Welcome : " . $customer->username . " , check your inpox to verify email");
        } catch (Exception $ex) {
            return back()->with('error', "Some Thing Wrong .");
        }

    }

    /**
     * todo Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $user = $user->load('media_one');
        return view('Auth.Users.edit', compact('user'));
    }


    // todo profile page update info
    public function update(UpdateUserRequest $request, User $user)
    {
        try {
            // todo Register New Account //    
            $user->update([
                'name' => $request->name,
                'username' => Str::slug($request->name) . '_' . strtoupper(Str::random(3)),
                'email' => $request->email,
                'about' => $request->about,
                'password' => Hash::make($request->password),
            ]);
            return back()->with('success', "change info : " . $user->username . " , success");
        } catch (Exception $ex) {
            return back()->with('error', "Some Thing Wrong ." . $ex->getMessage());
        }
    }


    // todo change image of users 
    public function changeimg(Request $request)
    {
        //? Validate the request if needed
        $request->validate(['media' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',]);
        //? Get the user's media
        $user_media = Media::where('mediaable_type', 'User')->where('mediaable_id', auth()->user()->id)->first();
        if ($request->hasFile('media')) {
            //? Save the new image
            $path = $this->saveimage($request->file('media'), 'images/users/');
            //? Update the media record
            $user_media->update(['media' => $path]);
            return back()->with('success', "Photo changed successfully.");
        } else {
            return back()->with('error', "No image file selected.");
        }
    }


    // todo forget pass of user => send code from mail user 
    public function forget(ForgetRequest $request)
    {
        $request->session()->put('userEmail', $request->input('email'));
        $user = $this->checkmail($request->email);
        event(new MailCode($user));
        $user->date = Carbon::now();
        Mail::to($request->email)->send(new Codemailer($user));
        return redirect()->route('users.verfiyindex');
    }

    // todo resend code for user => send code from mail user again
    public function resend(Request $request)
    {
        $email = $request->session()->get('userEmail');
        $user = $this->checkmail($email);
        event(new MailCode($user));
        $user->date = Carbon::now();
        Mail::to($email)->send(new Codemailer($user));
        return redirect()->route('users.verfiyindex')->with('success', 'Check your inbox sir : ' . $user->username);
    }

    // todo verify Code for user
    public function codeverify(CodeVerifyRequest $request)
    {
        try {
            $email = $request->session()->get('userEmail');
            $user = User::where('email', $email)->where('code', $request->code)->first();
            $request->session()->forget('userEmail');
            return view('Auth.Users.change-pass', compact('user'));
        } catch (Exception $ex) {
            return back()->with('error', 'No email found in session' . $ex->getMessage());
        }
    }

    // todo change pass for user 
    public function Updatepass(ChangePassRequest $request, User $user)
    {
        try {
            $password = Hash::make($request->password);
            $user->update(['password' => $password]);
            Auth::attempt(['email' => $user->email, 'password' => $request->password]);
            return redirect()->route('homeindex');
        } catch (Exception $ex) {
            return back()->with('error', 'Authentication failed. Please try again.');
        }

    }

    // todo change pass for user 
    public function authors(Request $request)
    {
        $title = 'المؤلفين';
        $author = User::where('role', GuardEnums::AUTHOR->value)->get();
        $authors = $author->map(function ($author) {
            $author->stars = $author->getTypeStars();
            return $author;
        });
        return view('Auth.Users.authors-card', compact('authors', 'title'));
    }


    // todo show info for user 
    public function show(Request $request, User $user)
    {
        $title = ' المؤلفين > معلومات الكاتب';
        $authors = $user->load('media_one');
        $authors->stars = $authors->getTypeStars();
        $book = Books::where('user_id', $user->id)->with('media_one', 'department', 'user')->get();
        $books = $this->getBooks($book);
        return view('Auth.Users.show', compact('authors', 'title', 'books'));

    }

    // todo logout in account
    function logout()
    {
        Auth::logout();
        return redirect('/users/login');
    }
}
