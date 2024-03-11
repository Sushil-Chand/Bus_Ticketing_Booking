<!-- resources/views/drivers/index.blade.php -->
@extends('admin.dashboard')
@section('title', 'Bus Schedule')

@section('content')
    <div class="content-wrapper">
        {{-- <div class="content"> --}}
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
                                            <th>Bus Name</th>
                                            <th>Operator Name</th>
                                            <th>Departure Date</th>
                                            <th>Departure Time</th>
                                            <th>Return Date</th>
                                            <th>Return Time</th>
                                            <th>Fare Amount</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </thead>
                                        {{-- <tbody>
                                            @foreach($buses as $bus)
                                                <tr>
                                                    <td>{{ $bus->id }}</td>
                                                    <td>{{ $bus->bus_name }}</td>
                                                    <td>{{ $bus->bus_code }}</td>
                                                    <td>{{ $bus->type }}</td>
                                                    <td>{{ $bus->operator->name }}</td>
                                                    <td>{{ $bus->total_seats }}</td>
                                                    <td>{{ $bus->driver->name }}</td>
                                                    <td>{{ $bus->amenities }}</td>
                                                    <td>{{ $bus->status ? 'Active' : 'Inactive' }}</td>
                                                    <td>{{ $bus->created_at }}</td>
                                                    <td>
                                                        <a href="{{ route('buses.edit', $bus->id) }}" class="btn btn-sm btn-info">Edit</a>
                                                        <form action="{{ route('buses.destroy', $bus->id) }}" method="POST" style="display:inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody> --}}
                                    </table>
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
