<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home()
    {
        return view('user.home');
    }

    public function userindex()

    {    $user =User::all();
        return view('admin.user.index')->with('users', $user);
    }

    public function update($userId){

        $user = User::find($userId);

        if($user){
            if($user->status){
                $user->status =0;
            }
            else{
                $user->status= 1;
            }
        $user->save();
        }
        return back();

        }

    }




