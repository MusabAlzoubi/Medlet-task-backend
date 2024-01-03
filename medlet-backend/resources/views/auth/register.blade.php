@extends('layouts.app')

@section('contant')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">{{ __('Name') }}</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required autofocus>
                            <small class="text-muted">{{ __('Required') }}</small>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email') }}</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                            <small class="text-muted">{{ __('Required') }}</small>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">{{ __('Phone') }}</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
                            <small class="text-muted">{{ __('Optional') }}</small>
                        </div>

                        <div class="mb-3">
                            <label for="gender" class="form-label">{{ __('Gender') }}</label>
                            <select class="form-control" id="gender" name="gender" required>
                                <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                                <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                            </select>
                            <small class="text-muted">{{ __('Required') }}</small>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">{{ __('Image') }}</label>
                            <input type="file" class="form-control" id="image" name="image" accept="image/*" >
                            <small class="text-muted">{{ __('Optional') }}</small>
                        </div>
                                                <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" required>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password Confirmation -->
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                            @error('password_confirmation')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="role" class="form-label">{{ __('Role') }}</label>
                            <select class="form-control" id="role" name="role" onchange="toggleFields(this.value);" required>
                                <option value="student">Student</option>
                                <option value="instructor">Instructor</option>
                            </select>
                            <small class="text-muted">{{ __('Required') }}</small>
                        </div>

                        <div id="studentFields" style="display: none;">
                            <!--studentFields-->
                                                        <!--studentFields-->
                                                        <div class="mb-3">
                                                            <label for="full_name_arabic" class="form-label">{{ __('Full Name Arabic') }}</label>
                                                            <input type="text" class="form-control" id="full_name_arabic" name="full_name_arabic" value="{{ old('full_name_arabic') }}">
                                                        </div>
                            
                                                        <div class="mb-3">
                                                            <label for="full_name_english" class="form-label">{{ __('Full Name English') }}</label>
                                                            <input type="text" class="form-control" id="full_name_english" name="full_name_english" value="{{ old('full_name_english') }}">
                                                        </div>
                            
                                                        <div class="mb-3">
                                                            <label for="university_id" class="form-label">{{ __('University ID') }}</label>
                                                            <input type="text" class="form-control" id="university_id" name="university_id" value="{{ old('university_id') }}">
                                                        </div>
                            
                                                        <div class="mb-3">
                                                            <label for="gpa" class="form-label">{{ __('GPA') }}</label>
                                                            <input type="text" class="form-control" id="gpa" name="gpa" value="{{ old('gpa') }}">
                                                        </div>
                        </div>

                        <div id="instructorFields" style="display: none;">
                            <!-- instructorFields-->
                            <div class="mb-3">
                                <label for="specialty" class="form-label">{{ __('Specialty') }}</label>
                                <select class="form-control" id="specialty" name="specialty">
                                    <option value="IM/Cardiology">IM/Cardiology</option>
                                    <option value="IM/Pulmonology">IM/Pulmonology</option>
                                    <option value="IM/Endocrinology">IM/Endocrinology</option>
                                </select>
                                <small class="text-muted">{{ __('Optional') }}</small>
                            </div>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleFields(role) {
        const studentFields = document.getElementById('studentFields');
        const instructorFields = document.getElementById('instructorFields');

        if (role === 'student') {
            studentFields.style.display = 'block';
            instructorFields.style.display = 'none';
        } else if (role === 'instructor') {
            studentFields.style.display = 'none';
            instructorFields.style.display = 'block';
        } else {
            studentFields.style.display = 'none';
            instructorFields.style.display = 'none';
        }
    }
</script>

@endsection
