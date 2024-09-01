<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Role;
use App\Models\User;
use App\Models\Admin;
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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Traits\validator\ValidatorTrait;

class UsersController extends Controller
{
    use ImageTrait , ValidatorTrait , TestAuth , ResponseTrait,MethodTrait;


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
        return view('Auth.Users.home');
    }
    // todo login page
    function common()
    {
        return view('Auth.Books.common');
    }
    // todo register page
    function registerIndex()
    {
        return view('Auth.Users.regist');
    }
    // todo register page
    function authors()
    {
        return view('Auth.Users.authors-card');
    }

    // todo register page
    function depIndex()
    {
        return view('Auth.Departments.index');
    }

    // todo verify Email
    public function verfiy(User $user)
    {
        // ? verify the user Email
        event(new verifyEvent($user)); 
        return redirect()->route('users.loginindex')->with('success','Hy Sir : '.$user->username.' Verifu Email Succcessfuly');
    }
    

////////////////////////////////////// ? /////////////////////////////////////////////////////////
////////////////////////////////////// ? /////////////////////////////////////////////////////////
////////////////////////////////////// ? /////////////////////////////////////////////////////////
////////////////////////////////////// ? /////////////////////////////////////////////////////////


    // todo Login Users
    public function login(Request $request){
        try{
            $infofield = $this->CheckField($request);
            // ! valditaion
            $rules = $this->rulesAuthLogin($infofield['fields']);    
            $validator = $this->validate($request,$rules);
            if($validator !== true){return back()->with('error', $validator);}
            $auth = Auth::attempt($infofield['credentials']);
            return redirect()->route('homeindex');
            if(!$auth)
            return $this->AuthAdmin($infofield);
            }
            catch(Exception $ex){
                return $ex->getMessage();
        }
    }


    // todo add new account
    public function register(Request $request){

        // ! valditaion
        $rules = $this->rulesRegist();    
        $validator = $this->validate($request,$rules);
        if($validator !== true){return back()->with('error', $validator);}
        //! Determine the password
        $password = $request->password ? Hash::make($request->password) : null;
        
        // todo Register New Account //    
        $customer = User::create([
            'name'     => $request->name,
            'username' => Str::slug($request->name) . '_' . strtoupper(Str::random(3)),
            'email'    => $request->email,
            'password' => $password,
            'role'     => GuardEnums::USER->value
        ]);

        if($request->has('img')){$this->Addmedia($customer , $request->img);}
        else{$this->Addmedia($customer , '/images/users/users.png');}

        // todo send mail to user for verify email
        Mail::to($request->email)->send(new VerfiyMail($customer));
        if($customer){
            return redirect('/users/login')->with('success', "Welcome : ".$customer->username." , check your inpox to verify email");}
            else{return back()->with('error', "Some Thing Wrong .");}
        }

    /**
     * todo Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
         $user = $user->load('media_one');
         return view('Auth.Users.edit',compact('user'));
    }

    // todo profile page
    public function update(Request $request,User $user)
    {
         // ! valditaion
         $rules = $this->rulesUpdate();    
         $validator = $this->validate($request,$rules);
         if($validator !== true){return back()->with('error', $validator);}
        
         // todo Register New Account //    
         $customer = $user->update([
             'name'     => $request->name,
             'username' => Str::slug($request->name) . '_' . strtoupper(Str::random(3)),
             'email'    => $request->email,
             'password' => Hash::make($request->password),
         ]);
         if($customer){
             return back()->with('success', "change info : ".$user->username." , success" );}
             else{return back()->with('error', "Some Thing Wrong .");}
    }

    // todo change image of users 
    public function changeimg(Request $request)
    {

    }


    // todo forget pass of user => send code from mail user 
    public function forget(Request $request)
    {
         // ! valditaion
         $rules = ['email'=>'required|email|exists:users,email'];  
         $validator = $this->validate($request,$rules);
         if($validator !== true){return back()->with('error', $validator);}

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
        return redirect()->route('users.verfiyindex')->with('success','Check your inbox sir : '.$user->username);

    }

    // todo verify Code for user
    public function codeverify(Request $request){

        // ! valditaion
        $rules = ['code'=>'required|exists:users,code'];  
        $validator = $this->validate($request,$rules);
        if($validator !== true){return back()->with('error', $validator);}

        $email = $request->session()->get('userEmail');
        if ($email) {
                $user = User::where('email', $email)->where('code', $request->code)->first();
                if(isset($user)){
                    $request->session()->forget('userEmail');
                    return view('Auth.Users.change-pass',compact('user'));
                } 
            }
        return back()->with('error','No email found in session');
    }

    // todo change pass for user 
    public function Updatepass(Request $request,User $user){

        // ! valditaion
        $rules = ['password' => 'required|confirmed|min:8' ];
        $validator = $this->validate($request,$rules);
        if($validator !== true){return back()->with('error', $validator);}
        
        $password = Hash::make($request->password); 
        $user->update(['password' => $password]);
        //? Authenticate the user
        $auth = Auth::attempt(['email' => $user->email,'password' => $request->password]);
        if ($auth) {return redirect()->route('homeindex');} 
        else {return back()->with('error', 'Authentication failed. Please try again.');}
            
    }

    

    // todo logout in account
    function logout()
    {
        Auth::logout();
        return redirect('/users/login');
    }
}
