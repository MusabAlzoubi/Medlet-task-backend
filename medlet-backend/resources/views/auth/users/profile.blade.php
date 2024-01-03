@extends('layouts.app')

@section('contant')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 breadcrumb-wrapper mb-4">
                <span class="text-muted fw-light">User Profile /</span> Profile
            </h4>

            <!-- Header -->
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
                            <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
                                <img width="100px" height="100px" src="{{ asset('images/user/' . $user->image) }}" alt="user image"  class="d-block h-auto ms-0 ms-sm-4 rounded-3 user-profile-img">
                            </div>
                            <div class="flex-grow-1 mt-3 mt-sm-5">
                                <div
                                    class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                                    <div class="user-profile-info">
                                        <h4>{{ $user->name }}</h4>
                                        <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                                            <li class="list-inline-item fw-semibold">
                                                <i class='bx bx-pen'></i> {{ $user->role->name }}
                                            </li>
                                            <li class="list-inline-item fw-semibold">
                                                <i class='bx bx-calendar-alt'></i> Joined {{ $user->created_at->format('F Y') }}
                                            </li>
                                        </ul>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Header -->

            <!-- Navbar pills -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-pills flex-column flex-sm-row mb-4">
                        <!-- Add your navigation pills here if needed -->
                    </ul>
                </div>
            </div>
            <!--/ Navbar pills -->

            <!-- User Profile Content -->
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-5">
                    <!-- About User -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <small class="text-muted text-uppercase">About</small>
                            <ul class="list-unstyled mb-4 mt-3">
                                <li class="d-flex align-items-center mb-3"><i class="bx bx-user"></i><span class="fw-semibold mx-2"> Name:</span> <span>{{ $user->name }}</span></li>
                                <li class="d-flex align-items-center mb-3"><i class="bx bx-check"></i><span class="fw-semibold mx-2">Status:</span> <span>Active</span></li>
                                <li class="d-flex align-items-center mb-3"><i class="bx bx-star"></i><span class="fw-semibold mx-2">Role:</span> <span>{{ $user->role->name }}</span></li>
                                <li class="d-flex align-items-center mb-3"><i class="bx bx-users"></i><span class="fw-semibold mx-2">Gender:</span> <span>{{ $user->gender}}</span></li>

                                
                                @if ($user->isInstructor())
                                    <li class="d-flex align-items-center mb-3"><i class="bx bx-specialty"></i><span class="fw-semibold mx-2">Specialty:</span> <span>{{ $user->instructor->specialty }}</span></li>
                                @elseif ($user->isStudent())
                                    <li class="d-flex align-items-center mb-3"><i class="bx bx-book-reader"></i><span class="fw-semibold mx-2">Full Name (Arabic):</span> <span>{{ $user->student->full_name_arabic }}</span></li>
                                    <li class="d-flex align-items-center mb-3"><i class="bx bx-book-reader"></i><span class="fw-semibold mx-2">Full Name (English):</span> <span>{{ $user->student->full_name_english }}</span></li>
                                    <li class="d-flex align-items-center mb-3"><i class="bx bx-university"></i><span class="fw-semibold mx-2">University ID:</span> <span>{{ $user->student->university_id }}</span></li>
                                    <li class="d-flex align-items-center mb-3"><i class="bx bx-award"></i><span class="fw-semibold mx-2">GPA:</span> <span>{{ $user->student->gpa }}</span></li>
                                @endif
                            </ul>
                            
                            <small class="text-muted text-uppercase">Contacts</small>
                            <ul class="list-unstyled mb-4 mt-3">
                                <li class="d-flex align-items-center mb-3"><i class="bx bx-phone"></i><span class="fw-semibold mx-2">Phone Number:</span> <span>{{ $user->phone }}</span></li>
                                <li class="d-flex align-items-center mb-3"><i class="bx bx-envelope"></i><span class="fw-semibold mx-2">Email:</span> <span>{{ $user->email }}</span></li>
                            </ul>
                            
                            <!-- Add more sections or details as needed based on the user's role -->
                            
                        </div>
                    </div>
                    
                </div>
                <!--/ User Profile Content -->

                <div class="col-xl-4 col-lg-5 col-md-5">
                    <!-- About User -->
                    <div class="card mb-4">
                        <div class="card">
                            <div class="card-header">{{ __('Edit Profile') }}</div>
                    
                            <div class="card-body">
                                <form method="POST" action="{{ route('user.update-profile') }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                    
                                    <div class="mb-3">
                                        <label for="name" class="form-label">{{ __('Name') }}</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}" required autofocus>
                                        <small class="text-muted">{{ __('Required') }}</small>
                                    </div>
                    
                                    <div class="mb-3">
                                        <label for="email" class="form-label">{{ __('Email') }}</label>
                                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" required>
                                        <small class="text-muted">{{ __('Required') }}</small>
                                    </div>
                    
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">{{ __('Phone') }}</label>
                                        <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $user->phone) }}">
                                        <small class="text-muted">{{ __('Optional') }}</small>
                                    </div>
                    
                                    <div class="mb-3">
                                        <label for="gender" class="form-label">{{ __('Gender') }}</label>
                                        <select class="form-control" id="gender" name="gender" required>
                                            <option value="male" {{ old('gender', $user->gender) == 'male' ? 'selected' : '' }}>Male</option>
                                            <option value="female" {{ old('gender', $user->gender) == 'female' ? 'selected' : '' }}>Female</option>
                                        </select>
                                        <small class="text-muted">{{ __('Required') }}</small>
                                    </div>
                    
                                    <div class="mb-3">
                                        <label for="image" class="form-label">{{ __('Image') }}</label>
                                        <input type="file" class="form-control" id="image" name="image" accept="image/*">
                                        <small class="text-muted">{{ __('Optional') }}</small>
                                    </div>
                    
                                    @if ($user->isStudent())
                                        <!-- Student Fields -->
                                        <div class="mb-3">
                                            <label for="full_name_arabic" class="form-label">{{ __('Full Name Arabic') }}</label>
                                            <input type="text" class="form-control" id="full_name_arabic" name="full_name_arabic" value="{{ old('full_name_arabic', $user->student->full_name_arabic ?? '') }}">
                                        </div>
                    
                                        <div class="mb-3">
                                            <label for="full_name_english" class="form-label">{{ __('Full Name English') }}</label>
                                            <input type="text" class="form-control" id="full_name_english" name="full_name_english" value="{{ old('full_name_english', $user->student->full_name_english ?? '') }}">
                                        </div>
                    
                                        <div class="mb-3">
                                            <label for="university_id" class="form-label">{{ __('University ID') }}</label>
                                            <input type="text" class="form-control" id="university_id" name="university_id" value="{{ old('university_id', $user->student->university_id ?? '') }}">
                                        </div>
                    
                                        <div class="mb-3">
                                            <label for="gpa" class="form-label">{{ __('GPA') }}</label>
                                            <input type="text" class="form-control" id="gpa" name="gpa" value="{{ old('gpa', $user->student->gpa ?? '') }}">
                                        </div>
                                    </div>
                                    @elseif ($user->isInstructor())
                                        <!-- Instructor Fields -->
                                        <div class="mb-3">
                                            <label for="specialty" class="form-label">{{ __('Specialty') }}</label>
                                            <select class="form-control" id="specialty" name="specialty">
                                                <option value="IM/Cardiology" {{ old('specialty', $user->instructor->specialty ?? '') == 'IM/Cardiology' ? 'selected' : '' }}>IM/Cardiology</option>
                                                <option value="IM/Pulmonology" {{ old('specialty', $user->instructor->specialty ?? '') == 'IM/Pulmonology' ? 'selected' : '' }}>IM/Pulmonology</option>
                                                <option value="IM/Endocrinology" {{ old('specialty', $user->instructor->specialty ?? '') == 'IM/Endocrinology' ? 'selected' : '' }}>IM/Endocrinology</option>
                                            </select>
                                            <small class="text-muted">{{ __('Optional') }}</small>
                                        </div>
                    
                                        <!-- Add other instructor-specific fields if needed -->
                    
                                    @endif
                    
                                    <!-- Add other common fields like email, phone, gender, image, etc. -->
                    
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary">{{ __('Update Profile') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                   


                </div>
            </div>
        </div>

   
    <!-- / Content -->
@endsection




