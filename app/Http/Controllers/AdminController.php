<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {
        return view('admin.dashboard');
    }

    public function userindex()
    { 
        $user = User::where('usertype', 1)->get();
        return view('admin.user.index')->with('users', $user);
    }

    public function update($userId){ //user active or inactive

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
