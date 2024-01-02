@extends('layouts.app')

@section('contant') 

<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="py-3 breadcrumb-wrapper mb-4">
            <span class="text-muted fw-light">DataTables /</span> Basic
        </h4>

        <div class="card">
            <div class="card-body">
                <h2 class="mb-4">Create New User</h2>

                <div class="row">
                    <div class="col-md-6">
                        <!-- Display validation errors if there are any -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- User creation form -->
                        <form action="{{ route('adminusers.store') }}" method="POST" class="needs-validation" novalidate>
                            @csrf

                            <!-- User Name -->
                            <div class="mb-3">
                                <label for="name" class="form-label">User Name</label>
                                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                                <div class="invalid-feedback">Please enter the user name.</div>
                            </div>

                            <!-- User Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">User Email</label>
                                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                                <div class="invalid-feedback">Please enter a valid email address.</div>
                            </div>

                            <!-- User Phone -->
                            <div class="mb-3">
                                <label for="phone" class="form-label">User Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" maxlength="20">
                                <div class="invalid-feedback">Please enter a valid phone number.</div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <!-- User Gender -->
                            <div class="mb-3">
                                <label for="gender" class="form-label">Gender</label>
                                <select name="gender" id="gender" class="form-control @error('gender') is-invalid @enderror" required>
                                    <option value="" disabled selected>Select Gender</option>
                                    <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                                    <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                                </select>
                                <div class="invalid-feedback">Please select a gender.</div>
                            </div>

                            <!-- User Image -->
                            <div class="mb-3">
                                <label for="image" class="form-label">User Image</label>
                                <input type="file" name="image" id="image" class="form-control">
                            
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" required>
                                <div class="invalid-feedback">Please enter a password with at least 8 characters.</div>
                            </div>

                            <!-- Password Confirmation -->
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                                <div class="invalid-feedback">Please confirm your password.</div>
                            </div>

                            <!-- Role Selection -->
                            <div class="mb-3">
                                <label for="role_id" class="form-label">Role</label>
                                <select name="role_id" id="role_id" class="form-control @error('role_id') is-invalid @enderror" required>
                                    <option value="" disabled selected>Select Role</option>
                                    @foreach($roles as $role)
                                        <option value="{{ $role->id }}" {{ old('role_id') == $role->id ? 'selected' : '' }}>{{ $role->name }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">Please select a role.</div>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary">Create User</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-5">

    </div>
</div>



@endsection
