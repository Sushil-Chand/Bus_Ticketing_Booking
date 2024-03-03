<!-- resources/views/drivers/edit.blade.php -->

@extends('admin.dashboard')
@section('title', 'edit-driver')

@section('content')
<br>
<br>

<div class="content-wrapper">
    <div class="content">
        <br>
<br>
    <div class="container">
       
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Driver</div>

                    <div class="card-body">
    

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('drivers.update', $driver->id) }}" method="POST">
            @csrf
            @method('put')
        
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $driver->name) }}" required>
            </div>
        
            <div class="form-group">
                <label for="gender">Gender:</label>
                <select name="gender" id="gender" class="form-control" required>
                    <option value="male" {{ old('gender', $driver->gender) === 'male' ? 'selected' : '' }}>Male</option>
                    <option value="female" {{ old('gender', $driver->gender) === 'female' ? 'selected' : '' }}>Female</option>
                </select>
            </div>
        
            <div class="form-group">
                <label for="license_number">License Number:</label>
                <input type="text" name="license_number" id="license_number" class="form-control" value="{{ old('license_number', $driver->license_number) }}" required>
            </div>
        
            <div class="form-group">
                <label for="contact_number">Contact Number:</label>
                <input type="text" name="contact_number" id="contact_number" class="form-control" value="{{ old('contact_number', $driver->contact_number) }}" required>
            </div>
        
            <!-- Add more fields as needed -->
        
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update Driver</button>
            </div>
        </form>
        
    </div>
@endsection
