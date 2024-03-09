

@extends('admin.dashboard')
@section('title', 'Sub_regions')

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
                                <a href="{{ route('sub_regions.create') }}" class="btn btn-primary float-right">Add Region</a>
                            <h2>Sub Region List</h2>
                      
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
                                        <th>Sub Region Name</th>
                                        <th> Sub Region Code</th>
                                        <th>Travel Time </th>
                                        <th>Travel Distance(KM)</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sub_region as $regions)
                                        <tr>
                                            <td>{{ $loop->iteration}}</td>
                                            <td>{{ $regions->region->region_name}}</td>

                                            <td>{{ $regions->sub_region_name }}</td>


                                            <td>{{ $regions->sub_region_code }}</td>
                                            <td>{{ ($regions->travel_time) }}</td>
                                            <td>{{ $regions->distance }} km</td>
                                            

                                            <td>{{ $regions->status ? 'Active' : 'Inactive' }}</td>
    
                                            <td>
                                                
                                                <a href="{{ route('sub_regions.edit', $regions->id) }}" class="btn btn-warning">Edit</a>
                                                <form action="{{ route('sub_regions.destroy', $regions->id) }}" method="POST" style="display:inline">
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
