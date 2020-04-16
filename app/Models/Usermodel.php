<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Usermodel extends Model
{
    protected $table= 'vp_users';
    protected $primaryKey= 'id';
    protected $guarded= [];
    public static function form(Request $request)
    {
         if (isset($request->id)) {
            $users = Usermodel::find($request->id);
            $users->fullname = $request->fullname;
            $users->username = $request->username;
            $users->password = $request->password;
            $users->email = $request->email;
            $users->level = $request->level;
            $users->save();
        } else {
            $users = new Usermodel();
            $users->fullname = $request->fullname;
            $users->username = $request->username;
            $users->password = $request->password;
            $users->email = $request->email;
            $users->level = $request->level;
            $users->save();
        }
    }
}
