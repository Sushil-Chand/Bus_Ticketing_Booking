<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seat;

class BookingController extends Controller
{
    public function index()
   {
    // Retrieve the logged-in user's ID
    $user = auth()->user();
    $user_id = $user->id;

    // Retrieve the booking history for the user with the bus name and user name
    $bookings = Seat::with(['bus', 'user'])
                    ->where('user_id', $user_id)
                    ->select('seat_no', 'bus_id', 'price', 'booked', 'user_id')
                    ->get();

    // Map the results to include the bus_name and user_name
    $bookings = $bookings->map(function ($booking) {
        return [
            'seat_no' => $booking->seat_no,
            'bus_id' => $booking->bus_id,
            'price' => $booking->price,
            'booked' => $booking->booked,
            'bus_name' => optional($booking->bus)->bus_name,
            'bus_code' => optional($booking->bus)->bus_code,
            'user_name' => optional($booking->user)->name,
        ];
    });

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


    public function destroy($id)
{
    // Find the booking by ID and delete it
    $booking = Seat::findOrFail($id);
    $booking->delete();

    // Redirect back with a success message
    return redirect()->route('booking.index')->with('success', 'Booking deleted successfully.');
}

}
