@extends('admin.dashboard')
@section('title', 'User Index')

@section('content')

<style>
    .profile-image-wrapper {
        width: 100px;
        height: 100px;
        overflow: hidden;
        border-radius: 50%;
    }

    .profile-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50%;
    }
</style>

<div class="content-wrapper">
    <div class="content">
        <br>
        <br>
        <br>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h2>User List of system Register</h2>
                                <!-- Search Bar -->
                                <form method="GET" id="searchForm">
                                    @csrf
                                    <input type="text" name="search" id="searchInput" placeholder="Search users...">
                                    <!-- Remove the submit button -->
                                </form>
                                
                            </div>
                            <div class="card-body table-responsive p-2">
                                <table class="table mt-3">
                                    <thead class="text-primary">
                                        <tr>
                                            <th>SN</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Contact</th>
                                            <th>Address</th>
                                            <th>Profile Image</th>
                                            <th>Status</th>
                                            <th>Created At</th>
                                        </tr>
                                    </thead>
                                    <tbody id="userData">
                                        @forelse ($users as $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->contactno }}</td>
                                                <td>{{ $user->address }}</td>
                                                <td>
                                                    <div class="profile-image-wrapper">
                                                        <img src="{{ $user->profile_image ? asset('images/profile_pictures/' . $user->profile_image) : '' }}" alt="No Image" class="profile-image" width="100">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{ route('user.status', ['id' => $user->id]) }}" class="btn btn-sm btn-{{ $user->status ? 'success' : 'danger' }}">
                                                        {{ $user->status ? 'Active' : 'Inactive' }}
                                                    </a>
                                                </td>
                                                <td>{{ $user->created_at }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="8" class="text-center">No users found.</td>
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

<!-- Add this script in your HTML file, preferably at the end of the body section -->
<script>
    $(document).ready(function () {
        // Attach an event listener to the search form
        $('#searchForm').on('submit', function (e) {
            e.preventDefault(); // Prevent the form from submitting and reloading the page
        });

        // Attach an event listener to the search input field
        $('#searchInput').on('input', function () {
            // Get the search query
            var query = $(this).val().toLowerCase();

            // Show or hide table rows based on the search query
            $('.table tbody tr').each(function () {
                var name = $(this).find('td:eq(1)').text().toLowerCase(); // Change the index to match the column you want to search

                // Show or hide the row based on the search query
                if (name.includes(query)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
    });
</script>

<script>
    document.getElementById('searchInput').addEventListener('input', function() {
        let input, filter, table, tr, td, i, txtValue;
        input = document.getElementById('searchInput');
        filter = input.value.toUpperCase();
        table = document.querySelector('.table');
        tr = table.getElementsByTagName('tr');

        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName('td');
            for (let j = 0; j < td.length; j++) {
                let cell = td[j];
                if (cell) {
                    txtValue = cell.textContent || cell.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = '';
                        break;
                    } else {
                        tr[i].style.display = 'none';
                    }
                }
            }
        }
    });
</script>


@endsection
