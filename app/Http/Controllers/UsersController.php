<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    //

    
   // todo profile page
   public function index()
   {

   }

    // todo login page
    function loginindex()
    {
        return view('Auth.login');
    }

    // todo Login Users
    public function login(Request $request){
        try{
        $infofield = $this->CheckField($request);
        // ! valditaion
        $rules = $this->rulesLogin($infofield['fields']);    
        $validator = $this->validate($request,$rules);
        if($validator !== true){return back()->with('error', $validator);}

        $auth = Auth::attempt($infofield['credentials']);
        if(!$auth)
        return back()->with('error', "information not valid.");
        }
        catch(Exception $ex){
            return $ex->getMessage();
        }
    }

    // todo register page
    function registerIndex()
    {
        return view('Auth.register');
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
            'gmail'    => $request->gmail,
            'password' => Hash::make($request->password),
        ]);
        $this->Addmedia($customer , "/images/users/users.png");
         
        if($customer){
            return redirect('/users/login')->with('status', "Welcome : ".$customer->username);}
            else{return back()->with('error', "Some Thing Wrong .");}
    }

    /**
     * todo Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {

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
        return redirect('/');
    }
}
