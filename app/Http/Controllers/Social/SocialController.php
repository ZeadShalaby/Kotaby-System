<?php

namespace App\Http\Controllers\Social;

use App\Models\User;
use App\Mail\VerfiyMail;
use App\Enums\GuardEnums;
use App\Traits\MethodTrait;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use App\Traits\validator\ValidatorTrait;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\UsersController;

class SocialController extends Controller
{
    use MethodTrait, ValidatorTrait;
    //todo social service
    public function redirect($service)
    {
        if (isset($service))
            return Socialite::driver($service)->redirect();
        else
            return 'null';
    }

    // todo google callback info users
    public function Googlecallback()
    { // return response()->json($socialiteUser);

        $socialiteUser = Socialite::driver('google')->user();
        $request = $this->checkAuth($socialiteUser);
        if ($request instanceof RedirectResponse) {
            return $request;
        } //! If the result is a redirect response, return it

        // ! valditaion
        $rules = ['email' => 'required|email|unique:users,email'];
        $validator = $this->validate($request, $rules);
        if ($validator !== true) {
            return redirect()->route('users.loginindex')->with('error', $validator);
        }

        //? Call the register method
        return $this->createSocial($request);

        // //? Instantiate the UserController
        // $userController = new UsersController();        // ! error when i use register request in userscontroller 
        // //? Call the register method
        // return $userController->register($request);

    }

    // todo github callback info users
    public function Githubcallback()
    {
        $socialiteUser = Socialite::driver('github')->user();
        $request = $this->checkAuth($socialiteUser);
        if ($request instanceof RedirectResponse) {
            return $request;
        } //! If the result is a redirect response, return it

        // ! valditaion
        $rules = ['email' => 'required|email|unique:users,email'];
        $validator = $this->validate($request, $rules);
        if ($validator !== true) {
            return redirect()->route('users.loginindex')->with('error', $validator);
        }

        //? Call the register method
        return $this->createSocial($request);

        // //? Instantiate the UserController
        // $userController = new UsersController();        // ! error when i use register request in userscontroller 
        // //? Call the register method
        // return $userController->register($request);
    }



    // todo create sociaaccountl
    public function createSocial($request)
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
        } catch (\Exception $ex) {
            return back()->with('error', "Some Thing Wrong .");
        }
    }

}
