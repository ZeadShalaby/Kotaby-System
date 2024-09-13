<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\User;
use App\Models\Admin;
use App\Traits\ImageTrait;
use App\Models\Departments;
use App\Traits\MethodTrait;
use Illuminate\Http\Request;
use App\Traits\ResponseTrait;
use App\Traits\Requests\TestAuth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\LoginAdminRequest;
use App\Traits\validator\ValidatorTrait;

class AdminController extends Controller
{
    //
    use ImageTrait, ValidatorTrait, TestAuth, ResponseTrait, MethodTrait;

    //todo check for other users
    public function login(LoginAdminRequest $request)
    {
        try {
            $infofield = $this->CheckField($request);
            $title = 'الصفحه الرائيسية';
            $credentials = $infofield['credentials'];
            $admin = Admin::where('username', $credentials['username'])->first();
            if ($admin && Hash::check($credentials['password'], $admin->password)) {
                Auth::guard('admin')->login($admin);
                return redirect()->route('admin.home', compact('title'));
            }
            return redirect()->back()->with('error', 'Invalid information, please try again.');
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }

    // todo logout in account
    function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.loginindex');
    }

    // todo return Home page
    public function home()
    {
        return view('Admin.home');
    }



    // todo return all authors reported
    public function reportauthor()
    {
        $title = 'التقارير';
        $authors = User::reported()->with('media_one', 'report_one', )->get();
        return view('Admin.Users.report', compact('title', 'authors'));
    }

    // todo refuesd report authors
    public function reauthor(User $user)
    {
        $user->resetReportAt($user->id);
        return back()->with('success', 'تم الغاء التقرير بنجاح');
    }

    /**
     * todo Remove the specified resource from storage.
     * !  Delete Forever authors
     */
    public function authordestroy(Request $request)
    {
        try {
            $user = User::reported()->find($request->user);
            $user->forceDelete();
            return back()->with('success', "delete Book Succcessfully");
        } catch (\Exception $e) {
            return back()->with('error', 'Some thing Wrong' . $e->getMessage());
        }
    }


}
