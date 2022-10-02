@extends('layouts.admin.main')

@section('title', 'Users')

@section('pageTitle', 'Data Users')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Users</li>
@endsection

@section('content')
    <div class="col-lg-12">

        <!-- Alert -->
        @if($message = Session::get('msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card">
            
            <div class="card-header">
                <div class="d-flex justify-content-end">
                    <a class="btn btn-primary" href="{{ route('Users.create') }}"><i class="bi bi-plus"></i> Create User</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Role</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $no => $user)
                            <tr>
                                <td>{{ ++$no }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->address }}</td>
                                <td>
                                    @if ($user->role == 'admin')
                                        <span class="badge rounded-pill bg-warning">{{ $user->role }}</span>
                                    @else
                                        <span class="badge rounded-pill bg-success">{{ $user->role }}</span>
                                    @endif
                                </td>
                                <td class="d-flex">
                                    <a class="btn btn-primary" href="#"><i class="bi bi-pencil-square"></i> Edit</a> |
                                    <a class="btn btn-danger" href="#"><i class="bi bi-trash"></i> Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection