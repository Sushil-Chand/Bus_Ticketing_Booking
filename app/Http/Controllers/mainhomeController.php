<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainhomeController extends Controller
{
    public function index(){
        
        return view('user.mainhome');
    }

   
}
