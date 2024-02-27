@extends('admin.dashboard')
@section('title', 'Edit Bus')

@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Bus</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('buses.edit', $bus->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="bus_name">Bus Name</label>
                                    <input type="text" name="bus_name" id="bus_name" class="form-control" value="{{ $bus->bus_name }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="bus_code">Bus Code</label>
                                    <input type="text" name="bus_code" id="bus_code" class="form-control" value="{{ $bus->bus_code }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="type">Bus Type</label>
                                    <input type="text" name="type" id="type" class="form-control" value="{{ $bus->type }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="operator_id">Operator</label>
                                    <select name="operator_id" id="operator_id" class="form-control" required>
                                        @foreach($operators as $operator)
                                        <option value="{{ $operator->id }}" {{ $bus->operator_id == $operator->id ? 'selected' : '' }}>{{ $operator->operator_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="total_seats">Total Seats</label>
                                    <input type="number" name="total_seats" id="total_seats" class="form-control" value="{{ $bus->total_seats }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="user_id">User</label>
                                    <select name="user_id" id="user_id" class="form-control" required>
                                        @foreach($users as $user)
                                        <option value="{{ $user->id }}" {{ $bus->user_id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="driver_id">Driver</label>
                                    <select name="driver_id" id="driver_id" class="form-control" required>
                                        @foreach($drivers as $driver)
                                        <option value="{{ $driver->id }}" {{ $bus->driver_id == $driver->id ? 'selected' : '' }}>{{ $driver->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control" required>
                                        <option value="1" {{ $bus->status == 1 ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ $bus->status == 0 ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Update Bus</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
