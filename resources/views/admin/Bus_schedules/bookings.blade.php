@extends('admin.dashboard')
@section('title', 'Create Bus Schedule')

@section('content')

<div class="container">
    <br>
    <br>
    <br>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h3>All Bookings</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Seat No</th>
                                <th>Bus Name</th>
                                <th>Bus Number</th>
                                <th>Passenger</th>
                                <th>Price</th>
                                <th>Booked</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bookings as $booking)
                            <tr>
                                <td>{{ $booking['seat_no'] }}</td>
                                <td>{{ $booking['bus_name'] }}</td>
                                <td>{{ $booking['bus_code'] }}</td>
                                <td>{{$booking['user_name']}}</td>
                                <td>{{ $booking['price'] }}</td>
                                <td>{{ $booking['booked'] ? 'Yes' : 'No' }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
