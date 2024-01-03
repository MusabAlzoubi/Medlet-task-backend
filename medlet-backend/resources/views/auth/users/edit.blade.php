@extends('layouts.app')
@section('contant')      
              
             
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="py-3 breadcrumb-wrapper mb-4">
            <span class="text-muted fw-light">DataTables /</span> Basic
        </h4>

        <div class="card">
            <div class="card-body">
                <h2 class="mb-4">Edit User</h2>

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

                <!-- User update form -->
                <form action="{{ route('adminusers.update', $user->id) }}" method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
                    @csrf
                    @method('PUT') <!-- Use the PUT method for updates -->

                    <div class="row">
                        <div class="col-md-6">
                            <!-- User Name -->
                            <div class="mb-3">
                                <label for="name" class="form-label">User Name</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>
                            </div>

                            <!-- User Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">User Email</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" required>
                            </div>

                            <!-- User Phone -->
                            <div class="mb-3">
                                <label for="phone" class="form-label">User Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone', $user->phone) }}" maxlength="20">
                            </div>

                            <!-- User Gender -->
                            <div class="mb-3">
                                <label for="gender" class="form-label">Gender</label>
                                <select name="gender" id="gender" class="form-control">
                                    <option value="Male" {{ old('gender', $user->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                                    <option value="Female" {{ old('gender', $user->gender) == 'Female' ? 'selected' : '' }}>Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <!-- User Image -->
                            <div class="mb-3">
                                <label for="image" class="form-label">User Image</label>
                                <input type="file" name="image" id="image" class="form-control">
                                @if ($user->image)
                                    <img src="{{ asset($user->image) }}" alt="User Image" class="mt-2 img-thumbnail" style="max-width: 150px;">
                                @endif
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control">
                                <small class="text-muted">Leave blank if you don't want to change the password.</small>
                            </div>

                            <!-- Password Confirmation -->
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                            </div>

                            <!-- Role Selection -->
                            <div class="mb-3">
                                <label for="role_id" class="form-label">Role</label>
                                <select name="role_id" id="role_id" class="form-control">
                                    @foreach($roles as $role)
                                    <option value="{{ $role->id }}" {{ old('role_id', $user->role_id) == $role->id ? 'selected' : '' }}>{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Update User</button>
                </form>
            </div>
        </div>

        <hr class="my-5">

    </div>
</div>



          
@endsection