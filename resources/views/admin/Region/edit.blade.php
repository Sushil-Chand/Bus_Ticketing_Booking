@extends('admin.include.main')
@section('title', 'Edit Region')

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
            <button onclick="window.location='{{ route('regions.index') }}'" class="btn btn-primary">
                <i class="fa fa-arrow-left"></i> Back
            </button>
            <h2 class="text-center">Edit Region</h2>

            <form method="POST" action="{{ route('regions.update', $region->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="region_name">Region Name</label>
                            <input name="region_name" class="form-control" value="{{ $region->region_name }}" type="text" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="region_code">Region Code</label>
                            <input name="region_code" class="form-control" value="{{ $region->region_code }}" type="text" required>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-2">
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">Status:</label>
                            <select name="status" id="status" class="form-control" required>
                                <option value="1" {{ $region->status == 1 ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ $region->status == 0 ? 'selected' : '' }}>Inactive</option>
                            </select>
                            
                        </div>
                    </div>
                </div>



                
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Update Region</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
