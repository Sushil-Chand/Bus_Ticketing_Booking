<!-- resources\views\bus_schedules\create.blade.php -->
@extends('admin.dashboard')
@section('title', 'Bus schedule')


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
            <h2 class="mb-4">Add New Bus Schedule</h2>

            <form method="POST" action="{{ route('bus_schedules.store') }}">
                @csrf

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="bus_id">Bus Name</label>
                        <select name="bus_id" id="bus_id" class="form-control" required>
                            <option value="" selected disabled>Select the bus name</option>
                            @foreach($buses as $bus)
                                <option value="{{ $bus->id }}">{{ $bus->bus_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    

                    <div class="col-md-3">
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">Operator:</label>
                            <select name="operator_id" id="operator_id" class="form-control" required>
                                <option value="" disabled selected>Select the operator name</option>
                                @foreach($operators as $operator)
                                    <option value="{{ $operator->id }}">{{ $operator->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
             

                    
                    <div class="form-group col-md-3">
                        <label for="depart_date">Departure Date</label>
                        <input type="date" class="form-control" id="depart_date" name="depart_date" required>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="depart_time">Departure Time</label>
                        <input type="time" class="form-control" id="depart_time" name="depart_time" required>
                    </div>
              
                </div>

                <div class="form-row">

                    <div class="form-group col-md-4">
                        <label for="region_id">Region Name</label>
                        <select name="region_id" id="region_id" class="form-control" required>
                            <option value="" selected disabled>Select the region name</option>
                            @foreach($regions as $region)
                                <option value="{{ $region->id }}">{{ $region->region_name }}</option>
                            @endforeach
                        </select>
                    </div>
                
                <div class="form-group col-md-4">
                    <label for="sub_region_id">Sub Region Name</label>
                    <select name="sub_region_id" id="sub_region_id" class="form-control" required>
                        <option value="" selected disabled>Select the sub region name</option>
                        @foreach($subRegions as $subRegion)
                            <option value="{{ $subRegion->id }}">{{ $subRegion->sub_region_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="fare_amount">Fare Amount</label>
                    <input type="number" class="form-control" id="fare_amount" name="fare_amount" required>
                </div>

                
                </div>
                <div class="form-row">

                    
                    <div class="form-group col-md-3">
                        <label for="pickup_address">Drop of address</label>
                        <input type="text" class="form-control" id="pickup_address" name="pickup_address" required>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="dropoff_address">Pick of address</label>
                        <input type="text" class="form-control" id="dropoff_address" name="dropoff_address" required>
                    </div>

                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="return_date">Return Date</label>
                        <input type="date" class="form-control" id="return_date" name="return_date">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="return_time">Return Time</label>
                        <input type="time" class="form-control" id="return_time" name="return_time">
                    </div>
                </div>

                <div class="form-row">
                    
                    
                    <div class="form-group col-md-3">
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
    </div>
    
            </form>
     
            <br>
        </div>
        <br>
        
    </div>
@endsection
