<?php

namespace App\Http\Controllers;

use App\Models\Bus_Schedule;

use App\Models\Bus;
use App\Models\Seat;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //

    public function index(){
        $busSchedules = Bus_Schedule::all();
        $buses = [];

        foreach ($busSchedules as $busSchedule) {
            $busId = $busSchedule->bus_id;
            $bus = Bus::find($busId,);

            
    
            if ($bus) {
                $buses[] = $bus;
            }
        }
        return view('frontend.About.about',compact('buses','busSchedules'));
    }

    public function showbuslist($id)
    {
        $busSchedule = Bus_Schedule::findOrFail($id);
    
        $seats = Seat::where('bus_id', $busSchedule->bus_id)->get();
        // Pass the bus schedule and seats data to the view
        return view('frontend.Contact.viewseat', compact('busSchedule', 'seats'));
    }
}
