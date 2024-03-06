<!-- resources/views/drivers/index.blade.php -->

@extends('admin.dashboard')
@section('title', 'regions')

@section('content')
<br>
<br>

<div class="content-wrapper">
    {{-- <div class="content">
    <div class="container"> --}}
        <br>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                           
                            <div class="card-header">
                                <a href="{{ route('regions.create') }}" class="btn btn-primary float-right">Add Region</a>
                            <h2>Region List</h2>
                      
                                    <hr>
                            @if (session('success'))
                                <div class="alert alert-success mt-3">
                                    {{ session('success') }}
                                </div>
                            @endif
                           <div class="card-body table-responsive p-2">
                            <table class="table mt-3">
                                <thead class="text-primary">
                                    <tr>
                                        <th>SN</th>
                                        <th>Region Name</th>
                                        <th>Region Code</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($regions as $region)
                                        <tr>
                                            <td>{{ $region->id }}</td>
                                            <td>{{ $region->region_name }}</td>
                                            <td>{{ $region->region_code }}</td>
                                            <td>{{ $region->status ? 'Active' : 'Inactive' }}</td>
    
                                            <td>
                                                
                                                <a href="{{ route('regions.edit', $region->id) }}" class="btn btn-warning">Edit</a>
                                                <form action="{{ route('regions.destroy', $region->id) }}" method="POST" style="display:inline">
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
            </div>
        </section>
    </div>  
    </div>
</div>

@endsection
