@extends('admin.dashboard')
@section('title', 'Operator Index')

@section('content')
<br>
<br>
<br>
    <div class="content-wrapper">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <span class="pull-center">
                            <a href="{{ route('operators.create') }}" class="btn btn-sm btn-primary">
                                <i class="glyphicon glyphicon-plus"></i> Add New Operator
                            </a>
                        </span>
                        <br>
                        <br>
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Operators List</h4>
                                <p class="card-category">Operators is here</p>
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
                                        <th>Created Date</th>
                                        <th>Action</th>
                                        </thead>
                                        <tbody>
                                        @foreach($operators as $data)
                                            <tr>
                                                <td>{{ $data->operator_id }}</td>
                                                <td>
                                                    <a data-toggle="modal" data-target="#exampleModalCenterviewOperator{{ $data->id }}"
                                                       data-toggle="tooltip">{{ $data->name }}</a>
                                                </td>
                                                <td>{{ $data->email }}</td>
                                                <td>{{ $data->phone }}</td>
                                                <td>{{ $data->address }}</td>
                                                <td>{{ $data->created_at }}</td>
                                                <td>
                                                    <form action="{{ '/admin/operator/' . $data->id }}" method="post">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <input type="submit" name="submit" value="Edit" class="btn btn-sm btn-info"/>
                                                        <input type="submit" name="submit" value="Delete" class="btn btn-sm btn-danger"/>
                                                    </form>
                                                </td>
                                                    {{--image of operator image --}}
                                                {{-- <td>
                                                    <img src="{{ asset('storage/operator_images/' .$data->operator_logo) }}"
                                                        alt="{{ $data->operator_name }}">
                                                </td>  --}} 
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
