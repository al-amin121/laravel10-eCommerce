<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\Models\User;

class AdminUserController extends Controller
{
    public function adminUserList(){
        $data['getRecord'] = User::getAdmin();
        $data['header_title'] = "User";
        return view('admin.user.user-list', $data);
    }
    public function addUser(){
        $data['header_title'] = "Add User";
        return view('admin.user.add-user', $data);
    }
    public function addNewUser(Request $request){

        request()->validate([
            'email' => 'required|email|unique:users'
        ]);

        $user = New User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->status = $request->status;
        $user->admin = 1;
        $user->save();

        return redirect('admin/user/list')->with('success', "Admin Successfully Created" );
    }

    public function editUser($id){
        $data['getRecord'] = User::getSingle($id);
        $data['header_title'] = "Edit User";
        return view('admin.user.Edit-user', $data);
    }
    public function updateUser($id, Request $request){
        request()->validate([
            'email' => 'required|email|unique:users,email,'.$id
        ]);

        $user = User::getSingle($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if (!empty($request->password)){
            $user->password = Hash::make($request->password);
        }
        $user->status = $request->status;
        $user->admin = 1;
        $user->save();

        return redirect('admin/user/list')->with('success', "Admin Successfully updated" );
    }

    public function deleteUser($id){
        $user = User::getSingle($id);
        $user->delete = 1;
        $user->save();

        return redirect()->back()->with('success', "Admin Successfully deleted" );
    }
}
