@extends('admin.dashboard')
@section('title', 'User Index')

@section('content')
<br>
<br>
<br>
<div class="content-wrapper">
<div class="content">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item active">User</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="#" class="btn btn-primary px-4 m-2 float-right">Add</a>
                        </div>
                        <div class="card-body table-responsive p-2">
                            <table class="datatable table">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Contact</th>
                                        <th>Gender</th>
                                        <th>Address</th>
                                        <th>Profile Image</th>
                                        {{-- <th>Created At</th>
                                        <th>Updated At</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->contactno }}</td>
                                            <td>{{ $user->profile_image }}</td>
                                            <td>{{ $user->address }}</td>
                                            <td>
                                                @if (!empty($user->profile_image))
                                              
                                                    <img src="{{ asset('images/profile_pictures/' . $user->profile_image) }}" alt="Profile Image">
                                                @else
                                                    <p>No profile image available.</p>
                                                @endif
                                            </td>
                                            {{-- <td>{{ $user->updated_at }}</td> --}}
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
@endsection
