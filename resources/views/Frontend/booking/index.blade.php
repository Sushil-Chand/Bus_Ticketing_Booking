@extends('frontend.include.main')
@section('content')
    <div class="content">
        <br>
        <section id="booking-history">
            <div class="container">
                <div class="subscribe-title text-center">
                    <h2>Booking History</h2>
                </div>
                <div class="booking-history-table">
                    <table class="table table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th>Seat No</th>
                                <th>Bus Name</th>
                                <th>Bus Number</th>
                                <th>Price</th>
                                <th>Booked</th>
                          
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bookings as $booking)
                                <!-- show history booking bus -->
                                <tr>
                                    <td>{{ $booking['seat_no'] }}</td>
                                    <td>{{ $booking['bus_name'] }}</td>
                                    <td>{{$booking['bus_code']}}</td>
                                    <td>{{ $booking['price'] }}</td>
                                    <td>{{ $booking['booked'] ? 'Yes' : 'No' }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection
