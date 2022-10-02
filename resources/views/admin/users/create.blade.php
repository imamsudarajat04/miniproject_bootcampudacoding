@extends('layouts.admin.main')

@section('title', 'Form Users')

@section('pageTitle', 'Form Users')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('Users.index') }}">Users</a></li>
    <li class="breadcrumb-item active">Form Users</li>
@endsection

@section('content')
    <div class="col-lg-12">

        <!-- Alert Validasi -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="my-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card">

            <div class="card-body">
                <div class="d-flex justify-content-end mt-3">
                    <a class="btn btn-primary" href="{{ route('Users.index') }}"><i class="bi bi-arrow-bar-left"></i> Back</a>
                </div>
                
                <form class="row g-3" method="POST" action="{{ route('Users.store') }}">
                    @csrf
                    <div class="col-12">
                        <label for="Name" class="form-label">Name</label>
                        <input class="form-control" type="text" name="name" id="name" placeholder="Insert Your Name..">
                    </div>

                    
                    <div class="col-12">
                        <label for="Email" class="form-label">Email</label>
                        <input class="form-control" type="email" name="email" id="email" placeholder="Insert Your Email..">
                    </div>

                    <div class="col-6">
                        <label for="Password" class="form-label">Password</label>
                        <input class="form-control" type="password" name="password" id="password" placeholder="Insert Your Password..">
                    </div>

                    <div class="col-6">
                        <label for="Confirm Password" class="form-label">Confirm Password</label>
                        <input class="form-control" type="password" name="confirm_password" id="confirm_password" placeholder="Insert Your Confirm Password..">
                    </div>

                    <div class="col-12">
                        <label for="Telphone" class="form-label">Telphone</label>
                        <input class="form-control" type="text" name="phone" id="phone" placeholder="Insert Your Telphone..">
                    </div>

                    <div class="col-12">
                        <label for="Address" class="form-label">Address</label>
                        <textarea class="form-control" name="address" id="address" cols="30" rows="3" placeholder="Insert Your Address.."></textarea>
                    </div>

                    <div class="col-12">
                        <label for="Role" class="form-label">Role</label>
                        <select class="form-control" name="role" id="role">
                            <option value="" selected disabled>Choose a role</option>
                            <option value="admin">Admin</option>
                            <option value="member">Member</option>
                        </select>
                    </div>

                    <div class="d-grid gap-2 mt-4">
                        <button class="btn btn-primary"><i class="bi bi-plus"></i> Insert</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection