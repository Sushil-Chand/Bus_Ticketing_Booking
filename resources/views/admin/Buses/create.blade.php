@extends('admin.dashboard')
@section('title', 'Create Bus')

@section('content')

<div class="content-wrapper">
    <div class="content">
        <br>
<br>
<br>
<br>
<br>

        <div class="container-fluid">
            <div class="row">
                <button onclick="window.location='{{ route('buses.index') }}'" class="btn btn-primary">
                    <i class="fa fa-arrow-left"></i> Back
                </button>
                <div class="col-md-12">
                    <div class="card">
                       
                        <div class="card-header card-header-primary">
                            
                            <h4 class="card-title">Create New Bus</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('buses.store') }}" method="POST">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Bus Name:</label>
                                            <input type="text" name="bus_name" id="bus_name" placeholder="Enter Bus Name"  class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Bus Number:</label>
                                            <input type="text" name="bus_code" id="bus_code" placeholder=" Enter Bus Code" class="form-control" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Bus Type:</label>
                                            <input type="text" name="type" id="type" placeholder=" Enter Bus Type" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Operator:</label>
                                            <select name="operator_id" id="operator_id" class="form-control" required>
                                                @foreach($operators as $operator)
                                                <option value="{{ $operator->id }}">{{ $operator->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Total Seats:</label>
                                            <input type="number" name="total_seats" id="total_seats"  placeholder=" Bus Seat capacity" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Driver:</label>
                                            <select name="driver_id" id="driver_id" class="form-control" required>
                                                @foreach($drivers as $driver) 
                                                    <option value="{{ $driver->id }}" >
                                                        {{ $driver->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    

                                    <div class="col-md-6">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Status:</label>
                                            <select name="status" id="status" class="form-control" required>
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Create Bus</button>
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
