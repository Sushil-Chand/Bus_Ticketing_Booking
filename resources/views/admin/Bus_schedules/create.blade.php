<!-- resources\views\bus_schedules\create.blade.php -->
@extends('admin.dashboard')
@section('title', 'Bus schedule')


@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Add New Bus Schedule</h2>

    <form method="POST" action="{{ route('bus_schedules.store') }}">
        @csrf

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="bus_id">Bus ID</label>
                <input type="text" class="form-control" id="bus_id" name="bus_id" required>
            </div>

            <div class="form-group col-md-6">
                <label for="operator_id">Operator ID</label>
                <input type="text" class="form-control" id="operator_id" name="operator_id" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="depart_date">Departure Date</label>
                <input type="date" class="form-control" id="depart_date" name="depart_date" required>
            </div>

            <div class="form-group col-md-6">
                <label for="depart_time">Departure Time</label>
                <input type="time" class="form-control" id="depart_time" name="depart_time" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="return_date">Return Date</label>
                <input type="date" class="form-control" id="return_date" name="return_date" required>
            </div>

            <div class="form-group col-md-6">
                <label for="return_time">Return Time</label>
                <input type="time" class="form-control" id="return_time" name="return_time" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="fare_amount">Fare Amount</label>
                <input type="number" class="form-control" id="fare_amount" name="fare_amount" required>
            </div>

            <div class="form-group col-md-6">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Save Schedule
        </button>
    </form>
</div>
@endsection
