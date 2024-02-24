@extends('admin.dashboard')
@section('title', 'User Index')


@section('content')

<style>

.profile-image-wrapper {
    width: 100px; /* Set the width and height to create a circular shape */
    height: 100px;
    overflow: hidden;
    
    border-radius: 50%; /* Make it circular */
}

.profile-image {
    width: 100%;
    height: 100%;
   
    
    object-fit: cover; /* Ensure the image covers the circular area */
    border-radius: 50%; /* Make it circular */
}
</style>


<div class="content-wrapper">
    <div class="content">
        <br>
        <br>
        <br>
        <br>
        
        {{-- <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item active">User</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section> --}}

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                           
                            <div class="card-header">
                               
                                <p class="btn btn-primary px-4 m-2 float-left">User List</p>
                            </div>
                            <div class="card-body table-responsive p-2">
                                <table class="datatable table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Contact</th>
                                            
                                            <th>Address</th>
                                            <th>Profile Image</th>
                                            <th>Status</th>
                                            <th>Created At</th>
                                            {{-- <th>Updated At</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($users as $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->contactno }}</td>
                                                
                                                <td>{{ $user->address }}</td>
                                                <td>
                                                    <div class="profile-image-wrapper">
                                                        <img src="{{ $user->profile_image ? asset('images/profile_pictures/' . $user->profile_image): '' }}" alt="No Image" class="profile-image" width="100">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{ route('user.status', ['id' => $user->id]) }}" class="btn btn-sm btn-{{ $user->status ? 'success' : 'danger' }}">
                                                        {{ $user->status ? 'Active' : 'Inactive' }}
                                                    </a>

                                                    
                                                </td>


                                                <td>{{ $user->created_at }}</td>
                                                {{-- <td>{{ $user->updated_at }}</td> --}}
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="9" class="text-center">No users found.</td>
                                            </tr>
                                        @endforelse
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



@endsection

