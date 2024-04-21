@extends('frontend.include.main')
@section('content')
<div class="content">
    <section id="booking-history" class="subscription">
        <div class="container">
            <div class="subscribe-title text-center">
                <h2>Booking History</h2>
            </div>
            <div class="booking-history-table">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>Seat No</th>
                            <th>Bus ID</th>
                            <th>Price</th>
                            <th>Booked</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bookings as $booking)
                        <tr>
                            <td>{{ $booking->seat_no }}</td>
                            <td>{{ $booking->bus_id }}</td>
                            <td>{{ $booking->price }}</td>
                            <td>{{ $booking->booked ? 'Yes' : 'No' }}</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
@endsection
