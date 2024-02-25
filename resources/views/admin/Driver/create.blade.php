<!-- resources/views/drivers/create.blade.php -->

@extends('admin.dashboard')
@section('title', 'create-driver')

@section('content')
  <br>
    
  <br>
  <br>
   <!-- resources/views/drivers/create.blade.php -->




    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create a New Driver</div>

                    <div class="card-body">
                        <form method="post" action="{{ route('drivers.store') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            @csrf
                            @method('post')

                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" name="name" id="name"  placeholder="Enter Driver Name" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="gender">Gender:</label>
                                <select name="gender" id="gender" class="form-control" required>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="license_number">License Number:</label>
                                <input type="text" name="license_number" id="license_number" placeholder=" Enter license number" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="contact_number">Contact Number:</label>
                                <input type="text" name="contact_number" id="contact_number" placeholder="Enter contact number" class="form-control" required>
                            </div>

                          
                            <!-- Add more fields as needed -->

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Create Driver</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- @include('admin.Operators.index') --}}
@endsection
