<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Bus_Schedule;
use App\Models\Bus;
use App\Models\Seat;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function home()
    {
        $users = User::count();
        $busSchedules = Bus_Schedule::count();
        $buses = Bus::count();
        $seats = Seat::count();

        return view('admin.dashboard', compact('users', 'busSchedules', 'buses', 'seats'));
        
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


    // public function admin_dashboard()
    // {
        
    //     $Users = User::count();
    //     $busSchedules = Bus_Schedule::count();
    //     $buses = Bus::count();
    //     $seats = Seat::count();

    //     return view('admin.dashboard', compact('Users', 'busSchedules', 'buses', 'seats'));
    // }
}
