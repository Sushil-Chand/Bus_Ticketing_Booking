<!-- resources/views/admin/Operators/create.blade.php -->

@extends('admin.dashboard')
@section('title', 'Create Operator')

@section('content')


<style>

.container{
    border: 1px solid #140404; /* Border color and style */
    padding: 20px; /* Adjust padding as needed */
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
                <h2 class="text-center">Add New Region</h2>
                <form method="POST" action="{{ route('sub_regions.store') }}" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">Region Name:</label>
                                <select name="region_id" id="region_id" class="form-control" required>
                                    @foreach($region as $regions)
                                    <option value="{{ $regions->id }}">{{ $regions->region_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="sub_region_name">Sub Region Name</label>
                                <input name="sub_region_name" class="form-control" placeholder="Enter Sub Region  Name" type="text" required>
                            </div>
                        </div>
                    </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="sub_region_code">Region Code</label>
                                <input name="sub_region_code" class="form-control" placeholder="Enter Region Code" type="text" required>
                            </div>
                        </div>
                    

                    <div class="form-group">
                        <label for="status">Active</label>
                        <input name="status" type="checkbox"  value="1">
                    </div>
                  
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Register Region</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
      </div>
    </div>
       
    </div>
   
   
@endsection


