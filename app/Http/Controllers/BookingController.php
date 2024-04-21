<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seat;

class BookingController extends Controller
{
    public function index()
    {
        // Retrieve the logged-in user's ID
        $user_id = auth()->user()->id;
    
        // Retrieve the booking history for the user
        $bookings = Seat::with('bus')
                        ->where('user_id', $user_id)
                        ->select('seat_no', 'bus_id', 'price', 'booked')
                        ->get();
    
        return view('Frontend.booking.index', compact('bookings'));
    }
    public function cancelBooking($id)
    {
        // Find the booking by ID
        $booking = Seat::findOrFail($id);

        // Update the booking status to false (0)
        $booking->update(['booked' => false]);

        // Redirect back or wherever you want
        return redirect()->back()->with('success', 'Booking cancelled successfully.');
    }
}
