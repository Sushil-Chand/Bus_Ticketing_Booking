<?php

namespace App\Http\Controllers;
use App\Models\Bus_Schedule;
use App\Models\Bus;
use App\Models\Seat;
use Illuminate\Http\Request;

class SeatController extends Controller
{
    public function index()
    {   
        
        $busSchedules = Bus_Schedule::all();
        $buses = [];

        foreach ($busSchedules as $busSchedule) {
            $busId = $busSchedule->bus_id;
            $bus = Bus::find($busId,);

            
    
            if ($bus) {
                $buses[] = $bus;
            }
        }
    
        // dd($buses);
         return view('admin.Seat.index',compact('buses','busSchedules'));
    }






    public function viewseats($id)
   {

    
    $bus= Bus::findOrFail($id);
   

    return view('admin.Seat.viewseat',compact('bus'));
   }
}
