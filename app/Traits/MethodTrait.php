<?php

namespace App\Traits;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


trait MethodTrait

{   

    // todo check login with username or email //
    protected function CheckField($request)
    {
     
         // ?login with phone number or email
         $field = filter_var($request->input('field'),FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
         $credentials = array(
            $field => $request->get('field'),
            'password' => $request->get('password')
        ); 
        return array(
            'credentials' => $credentials ,
            'fields' => $field 
        );
                  
    }

    // todo check gmail and return code to do forget pass //
    protected function checkmail($email)
    {
        $id = User::where('email', $email)->value('id');
        // Store a value in localStorage
        $user = User::find($id);
        if ($user) {
            $user->code = random_int(100000, 999999);
            return $user;
        }
        return null;
    }

    // todo check if user login or not use social account 
    protected function checkAuth($socialiteUser){
        $user = User::where('email', $socialiteUser->email)->first();
        if ($user) {
            Auth::guard('web')->login($user);
            return redirect()->route('homeindex');
        } else { 
        // ? sent request to method register create new user
        $request = new Request([
            'name'     => $socialiteUser->name,
            'email'    => $socialiteUser->email,
            'img'      => $socialiteUser->avatar
        ]);
        return $request;}
    }
    

    // todo add new media 
    protected function Addmedia($info , $media)
    {
        $info->media()->create([
            'media' => $media
        ]);
    }


}