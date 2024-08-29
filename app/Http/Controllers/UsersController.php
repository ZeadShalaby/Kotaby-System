<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Role;
use App\Models\User;
use App\Models\Admin;
use App\Enums\GuardEnums;
use App\Traits\ImageTrait;
use App\Traits\MethodTrait;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Traits\ResponseTrait;
use App\Traits\Requests\TestAuth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Traits\validator\ValidatorTrait;

class UsersController extends Controller
{
    use ImageTrait , ValidatorTrait , TestAuth , ResponseTrait,MethodTrait;


   // todo profile page
   public function index()
   {
      
   }

    // todo login page
    function loginindex()
    {
        return view('Auth.login');
    }

    // todo login page
    function home()
    {
        return view('Users.best');
    }

    // todo Login Users
    public function login(Request $request){
        try{
            $infofield = $this->CheckField($request);
            // ! valditaion
            $rules = $this->rulesAuthLogin($infofield['fields']);    
            $validator = $this->validate($request,$rules);
            if($validator !== true){return back()->with('error', $validator);}
            $auth = Auth::attempt($infofield['credentials']);
            return view('Users.home');
            if(!$auth)
            return $this->AuthAdmin($infofield);
            }
            catch(Exception $ex){
                return $ex->getMessage();
        }
    }


    // todo register page
    function registerIndex()
    {
        return view('Auth.regist');
    }



    // todo add new account
    public function register(Request $request){
        // ! valditaion
        $rules = $this->rulesRegist();    
        $validator = $this->validate($request,$rules);
        if($validator !== true){return back()->with('error', $validator);}
       
        // todo Register New Account //    
        $customer = User::create([
            'name'     => $request->name,
            'username' => Str::slug($request->name) . '_' . strtoupper(Str::random(3)),
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'role'     => GuardEnums::USER->value
        ]);
        $this->Addmedia($customer , "/images/users/users.png"); 
        if($customer){
            return redirect('/users/login')->with('success', "Welcome : ".$customer->username);}
            else{return back()->with('error', "Some Thing Wrong .");}
    }

    /**
     * todo Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
         $user = $user->load('media_one');
         return view('Auth.edit',compact('user'));
    }

    // todo profile page
    public function update(Request $request,User $user)
    {
        
    }

    // todo change image of users 
    public function changeimg(Request $request)
    {

    }

    // todo logout in account
    function logout()
    {
        Auth::logout();
        return redirect('/users/login');
    }
}
