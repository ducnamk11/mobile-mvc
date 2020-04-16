<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddUserRequest;
use App\Models\Usermodel;


class UserController extends Controller
{
    public function getUser()
    {
        $users = Usermodel::all();
        return view('backend.admin', compact('users'));
    }

    public function getAddUser()
    {
        $users = Usermodel::all();
        return view('backend.add', compact('users'));
    }

    public function postAddUser(AddUserRequest $request)
    {
        $users = Usermodel::form($request);
        return redirect('admin/user')->with('added','thêm người dùng thành công');
    }

    public function getEditUser($id)
    {
        $users = Usermodel::find($id);
        return view('backend.edit', compact('users'));
    }
    public function postEditUser(AddUserRequest $request, $id)
    {
        $users = Usermodel::form($request);
        return redirect()->intended('admin/user/')->with('added','Cập nhật thông tin thành công');
    }
    public function getDeleteUser($id)
    {
        UserModel::destroy($id);
        return back();
    }
}
