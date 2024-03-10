<!-- resources\views\bus_schedules\index.blade.php -->

@extends('admin.dashboard')
@section('title', 'Bus schedule')
@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Bus Schedules</h2>

    <a href="{{ route('bus_schedules.create') }}" class="btn btn-primary mb-3">
        <i class="fas fa-plus"></i> Add New Schedule
    </a>

    @if($busSchedules->count() > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Bus ID</th>
                    <th>Operator ID</th>
                    <th>Departure Date</th>
                    <th>Departure Time</th>
                    <th>Return Date</th>
                    <th>Return Time</th>
                    <th>Fare Amount</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($busSchedules as $schedule)
                    <tr>
                        <td>{{ $schedule->bus_id }}</td>
                        <td>{{ $schedule->operator_id }}</td>
                        <td>{{ $schedule->depart_date }}</td>
                        <td>{{ $schedule->depart_time }}</td>
                        <td>{{ $schedule->return_date }}</td>
                        <td>{{ $schedule->return_time }}</td>
                        <td>{{ $schedule->fare_amount }}</td>
                        <td>
                            @if($schedule->status)
                                <span class="badge badge-success">Active</span>
                            @else
                                <span class="badge badge-danger">Inactive</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('bus_schedules.edit', $schedule->id) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <!-- Add more actions if needed -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No bus schedules found.</p>
    @endif
</div>
@endsection
