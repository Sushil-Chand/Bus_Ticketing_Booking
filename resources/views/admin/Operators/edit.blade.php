<!-- resources/views/admin/Operators/create.blade.php -->

@extends('admin.dashboard')
@section('title', 'Create Operator')

@section('content')


<style>

.container{
    border: 1px solid #140404; /* Border color and style */
    padding: 20px; /* Adjust padding as needed */
}


    .logo-image {
        max-width: 70px; /* Set a maximum width */
        max-height: 80px; /* Set a maximum height */
        border-radius: 20%; /* Make it circular, adjust as needed */
        /* Add more styling as per your design */
    }

</style>

    <div class="content-wrapper">
        <div class="content">
            <br>
            <br>
            <br>
            <div class="container">
              <br>
              <div class="back-button">
                {{-- <a href="{{ route('operators.index') }}" class="btn btn-primary">
                    <i class="bi-arrow-left-circle-fill"></i> 
                </a> --}}
                {{-- <button onclick="history.back()" class="btn btn-primary">
                    <i class="fa fa-arrow-left"></i> Back
                </button> --}}

                <button onclick="window.location='{{ route('operators.index') }}'" class="btn btn-primary">
                    <i class="fa fa-arrow-left"></i> Back
                </button>
                
            </div>
                <h2 class="text-center">Update</h2>
                <form method="POST" action="{{ route('operators.update',  $operator->id) }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Operator Name</label>
                                <input name="name" class="form-control"    value="{{$operator->name }}" type="text" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input name="email" class="form-control" value="{{$operator->email }}" type="email" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone">Mobile Number</label>
                        <input name="phone" class="form-control" value="{{$operator->phone }}" type="number" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Operator Address</label>
                        <textarea name="address" rows="2" class="form-control"  type="text" required> {{$operator->address }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="status" type="checkbox" required>
                            <option value="1" {{ $operator->status == 1 ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ $operator->status == 0 ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="logo">Image</label>
                        <input type="file" name="logo">
                        <p>Current Image: <img src="{{ asset('images/operators_picture/' . $operator->logo) }}" alt="{{ $operator->logo }}" class="logo-image"></p>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Update Operator</button>
                    </div>
                </form>
            </div>
            <br>
            <br>
        </div>
    </div>

   
@endsection


