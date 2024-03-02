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
            <div class="container">
              <br>
                <h2 class="text-center">Update</h2>
                <form method="PUT" action="{{ route('operators.update',  $operator->id) }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Operator Name</label>
                                <input name="name" class="form-control" placeholder="Enter Operator Name" type="text" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input name="email" class="form-control" placeholder="Enter Email" type="email" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone">Mobile Number</label>
                        <input name="phone" class="form-control" placeholder="Enter Mobile Number" type="text" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Operator Address</label>
                        <textarea name="address" rows="2" class="form-control" placeholder="Enter Operator Address" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="status">Active</label>
                        <input name="status" type="checkbox">
                    </div>
                    <div class="form-group">
                        <label for="logo">Image</label>
                        <input type="file" name="logo">
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


