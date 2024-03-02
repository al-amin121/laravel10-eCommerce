<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Auth;

class AuthadminController extends Controller
{
    public function adminLogin(){
       if (!empty(Auth::check()) && Auth::user()->admin == 1){
           return redirect('/admin/dashboard');
       }
        return view('admin.auth.login');
    }
    public function adminAuth(Request $request){
       $remember = !empty($request->remember) ? true : false;
       if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'admin' => 1, 'status' => 0, 'delete' => 0 ],$remember)) {
           return redirect('/admin/dashboard');
       } else{
         return redirect()->back()->with('error',"Please enter currect email and password");
       }
    }
    public function adminLogout(){
        Auth::logout();
        return redirect('admin/login');
    }
}
