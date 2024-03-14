@extends('admin.dashboard')
@section('title', 'Operator Index')

@section('content')



<style>
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
            
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        
                        <br>
                        <br>
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <span class="pull-center">
                                    <a href="{{ route('operators.create') }}" class="btn btn-ls btn-primary float-right">
                                        <i class="glyphicon glyphicon-plus"></i> Add New Operator
                                    </a>
                                </span>
                                <h2 class="card-title">Operators List</h2>
                              
                            </div>
                            <div class="card-body">
                                @if(count($operators) > 0)
                                    <table class="table">
                                        <thead class="text-primary">
                                        <th>ID</th>
                                        <th>Operator Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        {{-- <th>Created Date</th> --}}
                                       
                                        <th>Status</th>
                                        <th>picture</th>
                                        <th>Action</th>
                                        </thead>
                                        <tbody>
                                        @foreach($operators as $data)
                                            <tr>
                                                <td>{{ $loop->iteration}}</td>
                                                <td>
                                                  {{ $data->name }}
                                                </td>
                                                <td>{{ $data->email }}</td>
                                                <td>{{ $data->phone }}</td>
                                                <td>{{ $data->address }}</td>
                                                {{-- <td>{{ $data->created_at }}</td>
                                                   --}}
<!-- ... -->
                                                <td>{{ $data->status ? 'Active' : 'Inactive' }}</td>
                                               
                                                <td>
                                                    <img src="{{ asset('images/operators_picture/' .$data->logo) }}"
                                                        alt="{{ $data->logo }}" class="logo-image">
                                                </td> 

                                                <td>
                                                        
                                                    <a href="{{ route('operators.edit',$data->id) }}" class="btn btn-warning">Edit</a>
                                                    <form action="{{ route('operators.destroy', $data->id) }}" method="POST" style="display:inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                                    </form> 
                                                 </td> 
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <p>No operators available.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
