<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus_Schedule;

class AboutController extends Controller
{
    //

    public function index(){
        $busList = Bus_Schedule::all(); 
        return view('frontend.About.about',compact('busList'));
    }
}
