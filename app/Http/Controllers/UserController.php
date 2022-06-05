<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $user){//here User is the User.php model
        return view('admin.users.profile',['user'=>$user]);
    }
    public function update(User $user){
        $inputs = request()->validate([
            'name'=>['required'],
            'email'=>['required']
        ]);
        $user->update($inputs);
        return back(); //back to the previous view
    }
}
