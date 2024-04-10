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






    // public function viewseats($id)
    // {
    // // Find the bus
    // $bus = Bus::findOrFail($id);

    // // Find the bus schedule for this bus
    // $busSchedule = Bus_Schedule::where('bus_id', $id)->first();

    // // Check if bus schedule exists
    // if (!$busSchedule) {
    //     // If bus schedule does not exist, handle it here (you can redirect or show an error)
    //     return redirect()->back()->with('error', 'Bus schedule not found.');
    // }

    // // Pass the bus and its corresponding schedule to the view
    // return view('admin.Seat.viewseat', compact('bus', 'busSchedule'));
    



    // public function generateSeatNumber($id)
    // {
    //     $bus = Bus::findOrFail($id);
    //     $totalSeats = $this->$bus->total_seats;
    //     $columnCount = 2; // Number of columns for seats
    //     $seatsPerColumn = $totalSeats / $columnCount;
    //     $seatLetters = range('A', 'Z');
    //     $seatIndex = 0;

    //     // Calculate column and seat letter based on seat ID
    //     $column = ($this->$id - 1) % $seatsPerColumn + 1;
    //     $seatLetter = $seatLetters[floor(($this->$id - 1) / $seatsPerColumn)];

    //     return  view('admin.Seat.viewseat', compact('seatLetter','column'));
    // }

    // public function bookSeats(Request $request)
    // {
    //     $selectedSeats = $request->input('seats');
    //     $busScheduleId = $request->input('bus_schedule_id');
    //     $busSchedule = Bus_Schedule::find($busScheduleId);

    //     foreach ($selectedSeats as $seatId) {
    //         // Find the seat by ID
    //         $seat = Seat::find($seatId);
    //         if ($seat) {
    //             // Update seat status and other details
    //             $seat->booked = true;
    //             $seat->bus_schedule_id = $busScheduleId;
    //             $seat->seat_no = $busSchedule->generateSeatNumber();
    //             $seat->save();
    //         }
    //     }
    //     return  view('admin.Seat.viewseat');
    //     return response()->json(['message' => 'Seats booked successfully'], 200);



    // }

    
    public function showBusSchedule($id)
    {
        $busSchedule = Bus_Schedule::findOrFail($id);
    
        $seats = Seat::where('bus_id', $busSchedule->bus_id)->get();
        // Pass the bus schedule and seats data to the view
        return view('admin.Seat.viewseat', compact('busSchedule', 'seats'));
    }

    public function bookBus($seatId)
    {
        $seat = Seat::findOrFail($seatId);
    
        $seat->booked = true;
        $seat->save();
    
        return redirect()->back();
    }
    

}
