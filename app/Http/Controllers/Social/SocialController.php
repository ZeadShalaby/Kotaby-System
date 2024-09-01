<?php

namespace App\Http\Controllers\Social;

use App\Traits\MethodTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Traits\validator\ValidatorTrait;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\UsersController;

class SocialController extends Controller
{
    use MethodTrait , ValidatorTrait;
    //todo social service
    public function redirect($service){
        if(isset($service))
        return Socialite::driver($service)->redirect();
        else return 'null';
    }

    // todo google callback info users
    public function Googlecallback(){ // return response()->json($socialiteUser);
       
        $socialiteUser =  Socialite::driver('google')->user();
        $request = $this->checkAuth($socialiteUser);
        if ($request instanceof RedirectResponse) {return $request;} //! If the result is a redirect response, return it
      
        // ! valditaion
        $rules = ['email'=>'required|email|unique:users,email'];  
        $validator = $this->validate($request,$rules);
        if($validator !== true){return redirect()->route('users.loginindex')->with('error', $validator);}

        //? Instantiate the UserController
        $userController = new UsersController();
        //? Call the register method
        return $userController->register($request);

    }

    // todo github callback info users
    public function Githubcallback()
    {
        $socialiteUser = Socialite::driver('github')->user();
        $request = $this->checkAuth($socialiteUser);
        if ($request instanceof RedirectResponse) {return $request;} //! If the result is a redirect response, return it
      
        // ! valditaion
        $rules = ['email'=>'required|email|unique:users,email'];  
        $validator = $this->validate($request,$rules);
        if($validator !== true){return redirect()->route('users.loginindex')->with('error', $validator);}

        //? Instantiate the UserController
        $userController = new UsersController();
        //? Call the register method
        return $userController->register($request);    
    }

}
