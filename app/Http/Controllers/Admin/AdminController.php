<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\Admin;
use App\Traits\ImageTrait;
use App\Traits\MethodTrait;
use Illuminate\Http\Request;
use App\Traits\ResponseTrait;
use App\Traits\Requests\TestAuth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Traits\validator\ValidatorTrait;

class AdminController extends Controller
{
    //
    use ImageTrait , ValidatorTrait , TestAuth , ResponseTrait,MethodTrait;

    //todo check for other users
    public function login(Request $request)
    {
        try{
            $infofield = $this->CheckField($request);
            // ! valditaion
            $rules = $this->rulesAdminLogin($infofield['fields']);    
            $validator = $this->validate($request,$rules);
            if($validator !== true){return back()->with('error', $validator);}

            $credentials = $infofield['credentials'];
            $admin = Admin::where('username', $credentials['username'])->first();
            if ($admin && Hash::check($credentials['password'], $admin->password)) {
                Auth::guard('admin')->login($admin);
                return redirect()->route('admin.home');
            }
            return redirect()->back()->with('error', 'Invalid information, please try again.');
            }
            catch(Exception $ex){
                return $ex->getMessage();
        }
    }

    // todo logout in account
    function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.loginindex');
    }

}
