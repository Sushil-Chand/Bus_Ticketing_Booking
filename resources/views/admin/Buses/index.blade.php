<!-- resources/views/drivers/index.blade.php -->
@extends('admin.dashboard')
@section('title', 'Bus Index')

@section('content')
<br>
<br>
<br>
    <div class="content-wrapper">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <span class="pull-center">
                            <a href="{{ route('buses.create') }}" class="btn btn-sm btn-primary">
                                <i class="glyphicon glyphicon-plus"></i> Add New Bus
                            </a>
                        </span>
                        <br>
                        <br>
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Buses List</h4>
                                <p class="card-category">List of buses</p>
                            </div>
                            <div class="card-body">
                                @if(count($buses) > 0)
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>ID</th>
                                            <th>Bus Name</th>
                                            <th>Bus Code</th>
                                            <th>Type</th>
                                            <th>Operator</th>
                                            <th>Total Seats</th>
                                            <th>Driver</th>
                                            {{-- <th>User</th> --}}
                                            <th>Status</th>
                                            <th>Created Date</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                                            @foreach($buses as $bus)
                                                <tr>
                                                    <td>{{ $bus->id }}</td>
                                                    <td>{{ $bus->bus_name }}</td>
                                                    <td>{{ $bus->bus_code }}</td>
                                                    <td>{{ $bus->type }}</td>
                                                    <td>{{ $bus->operator->name }}</td>
                                                    <td>{{ $bus->total_seats }}</td>
                                                    <td>{{ $bus->driver->name }}</td>
                                                    {{-- <td>{{ $bus->user->name }}</td> --}}
                                                    <td>{{ $bus->status ? 'Active' : 'Inactive' }}</td>
                                                    <td>{{ $bus->created_at }}</td>
                                                    <td>
                                                        <form action="{{ route('buses.edit', $bus->id) }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-info">Edit</button>
                                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <p>No buses available.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
