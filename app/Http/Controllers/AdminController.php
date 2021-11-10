<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function index(){
        if (Auth::guard('admin')->check()){
            return view('backend.admin.home.home');
        }
        return view('backend.admin.login.admin_login');
    }

    public function loginCheck(Request $request){
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required',
        ]);
        if (Auth::guard('admin')->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]))
        {
            return redirect()->route('admin.dashboard');
        }
        return back()->withErrors('The Combination of Username or Password is Incorrect!');
    }

    public function dashboard(){
        return view('backend.admin.home.home');
    }

    public function adminLogout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

    //Admin Register
    public function adminRegister(){
        return view('backend.admin.register.register');
    }

    public function saveRegister(Request $request){
        $this->validate($request,[
            'email' => 'required|unique:admins',
            'mobile_no' => 'nullable|numeric|regex:/(0)[0-9]/|not_regex:/[a-z]/|digits:11',
            'password' => 'required|confirmed',
            'name' => 'required',
            'address' => 'required',
            'role' => 'required',
        ]);
        Admin::create([
            'name'      => $request->name,
            'mobile_no' => $request->mobile_no,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
            'role'      => $request->role,
        ]);
        return redirect()->route('admin.login')->with('success','Your account has been created successfully');
    }

    //Change Password
    public function adminChangePassword(){
        return view('backend.admin.change_password.change-password');
    }
    public function saveChangePassword(Request $request){
        $this->validate($request,[
            'current_password' => 'required',
            'password' => 'required',
            'confirm_password' => 'required',
        ]);
        $ok = Admin::find($request->id);
        $password = $request->input('current_password');
        $check = Admin::where('id', Auth::guard('admin')->user()->id)->first();
        if(Hash::check($password, $check->password)) {
            if ($request->password == $request->confirm_password){
                $ok->password = Hash::make($request->password);
                $ok->save();
                return back()->withSuccess('Password Changed Successfully');
            }
            return back()->withErrors('Sorry, new password & confirm password did not match!');
        } else {
            return back()->withErrors('Sorry, current password did not match');
        }
    }
}
