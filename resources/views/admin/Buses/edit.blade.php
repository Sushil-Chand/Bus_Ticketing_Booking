@extends('admin.dashboard')
@section('title', 'Edit Bus')

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
                            <form action="{{ route('buses.update', $bus->id) }}" method="POST">
                                @csrf
                                @method('patch')

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Bus Name:</label>
                                            <input type="text" name="bus_name" id="bus_name" value="{{$bus->bus_name }}"  class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Bus Number:</label>
                                            <input type="text" name="bus_code" id="bus_code" value="{{$bus->bus_code }}"  class="form-control" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Bus Type:</label>
                                            <input type="text" name="type" id="type" value="{{$bus->type }}"  class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Operator:</label>
                                            <select name="operator_id" id="operator_id" class="form-control" required>
                                             
                                                @foreach($operators as $operator)
                                                <option value="{{ $operator->id }}" {{ $bus->operator_id == $operator->id ? 'selected' : '' }}>
                                                    {{ $operator->name }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Total Seats:</label>
                                            <input type="number" name="total_seats" id="total_seats"    value="{{$bus->total_seats }}"  class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Driver:</label>
                                            <select name="driver_id" id="driver_id" class="form-control" required>
                                                @foreach($drivers as $driver) 
                                                <option value="{{ $driver->id }}" {{ $bus->driver_id == $driver->id ? 'selected' : '' }}>
                                                    {{ $driver->name }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    

                                    <div class="col-md-3">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Status:</label>
                                            <select name="status" id="status" class="form-control" required>
                                                <option value="1" {{ $bus->status == 1 ? 'selected' : '' }}>Active</option>
                                                <option value="0" {{ $bus->status == 0 ? 'selected' : '' }}>Inactive</option>
                                            </select>
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Bus Amenities:</label>
                                            <input type="text" name="amenities" id="amenities"    value="{{$bus->amenities }}"  class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Seat Price:</label>
                                            <input type="text" name="seats_price" id="seats_price"    value="{{ $bus->seats_price  }}"  class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Update</button>
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