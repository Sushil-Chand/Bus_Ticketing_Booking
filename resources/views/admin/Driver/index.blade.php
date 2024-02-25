<!-- resources/views/drivers/index.blade.php -->

@extends('admin.dashboard')
@section('title', 'driver')

@section('content')
<br>
<br>

<div class="content-wrapper">
    <div class="content">
    <div class="container">

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                           
                            <div class="card-header">
                            <h2>Drivers</h2>
                            <a href="{{ route('drivers.create') }}" class="btn btn-primary">Add Driver</a>
                                    <hr>
                            @if (session('success'))
                                <div class="alert alert-success mt-3">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <table class="table mt-3">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>License Number</th>
                                        <th>Contact Number</th>
                                
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($drivers as $driver)
                                        <tr>
                                            <td>{{ $driver->id }}</td>
                                            <td>{{ $driver->name }}</td>
                                            <td>{{ $driver->gender }}</td>
                                            <td>{{ $driver->license_number }}</td>
                                            <td>{{ $driver->contact_number }}</td>
                                            <td>
                                                
                                                <a href="{{ route('drivers.edit', $driver->id) }}" class="btn btn-warning">Edit</a>
                                                <form action="{{ route('drivers.destroy', $driver->id) }}" method="POST" style="display:inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
    </div>  
    </div>
</div>

@endsection
