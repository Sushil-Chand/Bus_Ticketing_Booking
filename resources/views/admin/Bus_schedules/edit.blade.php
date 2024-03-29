<!-- resources\views\bus_schedules\edit.blade.php -->
@extends('admin.dashboard')
@section('title', 'Edit Bus Schedule')

@section('content')
    <style>
        .container {
            border: 1px solid #140404;
            /* Border color and style */
            padding: 20px;
            /* Adjust padding as needed */
        }
    </style>

    <div class="content-wrapper">
        <br>
        <br>
        <br>
        <div class="container mt-4">
            <br>
            <h2 class="mb-4">Edit Bus Schedule</h2>

            <form  action="{{ route('bus_schedules.update', $busSchedule->id) }}" method="POST">
                @csrf
                @method('patch')

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="bus_id">Bus Name</label>
                        <select name="bus_id" id="bus_id" class="form-control" required>
                            <option value="" disabled>Select the bus name</option>
                            @foreach($buses as $bus)
                                <option value="{{ $bus->id }}" {{ $bus->id == $busSchedule->bus_id ? 'selected' : '' }}>{{ $bus->bus_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">Operator:</label>
                            <select name="operator_id" id="operator_id" class="form-control" required>
                                <option value="" disabled>Select the operator name</option>
                                @foreach($operators as $operator)
                                    <option value="{{ $operator->id }}" {{ $operator->id == $busSchedule->operator_id ? 'selected' : '' }}>{{ $operator->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="region_id">Region Name</label>
                        <select name="region_id" id="region_id" class="form-control" required>
                            <option value="" disabled>Select the region name</option>
                            @foreach($regions as $region)
                                <option value="{{ $region->id }}" {{ $region->id == $busSchedule->region_id ? 'selected' : '' }}>{{ $region->region_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="sub_region_id">Sub Region Name</label>
                        <select name="sub_region_id" id="sub_region_id" class="form-control" required>
                            <option value="" disabled>Select the sub region name</option>
                            @foreach($subRegions as $subRegion)
                                <option value="{{ $subRegion->id }}" {{ $subRegion->id == $busSchedule->sub_region_id ? 'selected' : '' }}>{{ $subRegion->sub_region_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="depart_date">Departure Date</label>
                        <input type="date" class="form-control" id="depart_date" name="depart_date" value="{{ $busSchedule->depart_date }}">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="depart_time">Departure Time</label>
                        <input type="time" class="form-control" id="depart_time" name="depart_time" value="{{ $busSchedule->depart_time }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="fare_amount">Fare Amount</label>
                        <input type="number" class="form-control" id="fare_amount" name="fare_amount" value="{{ $busSchedule->fare_amount }}">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="pickup_address">Pickup Address</label>
                        <input type="text" class="form-control" id="pickup_address" name="pickup_address" value="{{ $busSchedule->pickup_address }}">
                    </div>
                        <div class="form-group col-md-3">
                            <label for="dropoff_address">Dropoff Address</label>
                            <input type="text" class="form-control" id="dropoff_address" name="dropoff_address" value="{{ $busSchedule->dropoff_address }}">
                        </div>
                    </div>
        
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="return_date">Return Date</label>
                            <input type="date" class="form-control" id="return_date" name="return_date" value="{{ $busSchedule->return_date }}">
                        </div>
        
                        <div class="form-group col-md-4">
                            <label for="return_time">Return Time</label>
                            <input type="time" class="form-control" id="return_time" name="return_time" value="{{ $busSchedule->return_time }}">
                        </div>
                    </div>
        
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status" required>
                                <option value="1" {{ $busSchedule->status == 1 ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ $busSchedule->status == 0 ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>
                    </div>
        
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Update Schedule
                    </button>
                </form>
            </div>
        </div>
        