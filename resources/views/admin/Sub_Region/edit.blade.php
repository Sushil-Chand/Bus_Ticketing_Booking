<!-- resources/views/admin/SubRegions/edit.blade.php -->

@extends('admin.dashboard')
@section('title', 'Edit Sub Region')

@section('content')
    <style>
        .container {
            border: 1px solid #140404;
            padding: 20px;
        }
    </style>

    <div class="content-wrapper">
        <div class="content">
            <br>
            <br>
            <br>
            <br>
            <br>

            <div class="container">
                <br>
                <button onclick="window.location='{{ route('sub_regions.index') }}'" class="btn btn-primary">
                    <i class="fa fa-arrow-left"></i> Back
                </button>
                <h2 class="text-center">Edit Sub Region</h2>
                <form method="POST" action="{{ route('sub_regions.update', $sub_region->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">Region Name:</label>
                                <select name="region_id" id="region_id" class="form-control" required>
                                    @foreach($regions as $region)
                                        <option value="{{ $region->id }}" {{ $sub_region->region_id == $region->id ? 'selected' : '' }}>
                                            {{ $region->region_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="sub_region_name">Sub Region Name</label>
                                <input name="sub_region_name" class="form-control" placeholder="Enter Sub Region Name"
                                       type="text" value="{{ $sub_region->sub_region_name }}" required>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="travel_time">Travel Time</label>
                                <input name="travel_time" class="form-control" value="{{ $sub_region->travel_time }}" type="text" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="sub_region_code">Sub Region Code</label>
                                <input name="sub_region_code" class="form-control" placeholder="Enter Sub Region Code"
                                       type="text" value="{{ $sub_region->sub_region_code }}" required>
                            </div>
                        </div>
                

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="distance">Distance(KM)</label>
                            <input name="distance" class="form-control" value="{{ $sub_region->distance }}" type="number" required>
                        </div>
                    </div>
                    </div>
                    <div class="row">

                        <div class="col-md-2">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">Status:</label>
                                <select name="status" id="status" class="form-control" required>
                                    <option value="1" {{ $sub_region->status == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $sub_region->status == 0 ? 'selected' : '' }}>Inactive</option>
                                </select>
                                
                            </div>
                        </div>
                    </div>
    

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Update Sub Region</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
