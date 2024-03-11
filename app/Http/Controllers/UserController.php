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

        public function search(Request $request)
        {
            $query = $request->input('search');
    
            // Perform the search query on the User model
            $users = User::where('name', 'LIKE', '%' . $query . '%')
                ->orWhere('email', 'LIKE', '%' . $query . '%')
                ->orWhere('contactno', 'LIKE', '%' . $query . '%')
                ->orWhere('address', 'LIKE', '%' . $query . '%')
                ->paginate(10); // You can adjust the pagination as needed
    
            // Return the view with the search results
            return view('admin.User.index', compact('users'));
        }

    }




