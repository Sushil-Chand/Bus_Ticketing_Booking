<!-- resources/views/drivers/index.blade.php -->
@extends('admin.dashboard')
@section('title', 'Bus Schedule')

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <br>
          
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                       
                        <br>
                        <br>
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <span class="pull-center">
                                    <a href="{{ route('bus_schedules.create') }}" class="btn btn-ls btn-primary float-right">
                                        <i class="fas fa-plus" ></i> Add New Schedule
                                    </a>
                                </span>
                                <h3>Buses Schedule</h3>
                               
                            </div>
                            <div class="card-body">
                             
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>S.N</th>
                                            <th>Bus Name</th>
                                            <th>Operator Name</th>
                                            <th>City</th>
                                            <th>Destination</th>
                                            <th>Departure Date</th>
                                            <th>Departure Time</th>
                                            <th>Return Date</th>
                                            <th>Return Time</th>
                                            <th>Pick</th>
                                            <th>Drop</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                                            @foreach($busSchedules as $schedule)
                                                <tr>
                                                    <td>{{ $loop->iteration}}</td>
                                                    <td>{{ $schedule->Bus->bus_name }}</td>
                                                    <td >{{ $schedule->Operator->name }}</td>
                                                    <td>{{ $schedule->Region->region_name }}</td>
                                                    <td>{{ $schedule->Sub_region->sub_region_name }}</td>
                                                    <td>{{ $schedule->depart_date }}</td>
                                                    <td>{{ $schedule->depart_time }}</td>
                                                    <td>{{ $schedule->return_date }} null</td>
                                                    <td>{{ $schedule->return_time }}null</td>
                                                    <td>{{ $schedule->pickup_address }}</td>
                                                    <td>{{ $schedule->dropoff_address }}</td>
                                                    <td>{{ $schedule->status ? 'Active' : 'Inactive' }}</td>
                                                 
                                                    <td>
                                                        <a href="{{ route('bus_schedules.edit', $schedule->id) }}" class="btn btn-sm btn-info">Edit</a>
                                                        <form action="{{ route('bus_schedules.destroy', $schedule->id) }}" method="POST" style="display:inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
