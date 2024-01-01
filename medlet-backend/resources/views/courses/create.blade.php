@extends('layouts.app')
@section('contant')      
              
             
{{-- @include('layouts.header') --}}

      

<!-- Content wrapper -->
<div class="content-wrapper">

    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="py-3 breadcrumb-wrapper mb-4">
            <span class="text-muted fw-light">DataTables /</span> Basic
        </h4>

        <div class="card">
            <div class="card-body">
                <h2>Create New Course</h2>

                {{-- Display validation errors if there are any --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{-- Course creation form --}}
                <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf

                    {{-- Course Name --}}
                    <div class="form-group">
                        <label for="course_name">Course Name</label>
                        <input type="text" name="course_name" id="course_name" class="form-control" required>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Please enter the course name.</div>
                    </div>

                    {{-- Is Elective --}}
                    <div class="form-group">
                        
                        <label for="is_elective">Is Elective</label>
                        <select name="is_elective" id="is_elective" class="form-control" required>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Please select whether the course is elective or not.</div>
                    </div>

                    {{-- Weeks --}}
                    <div class="form-group">
                        <label for="weeks">Weeks</label>
                        <input type="number" name="weeks" id="weeks" class="form-control" required>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Please enter the number of weeks.</div>
                    </div>

                    {{-- Students in Group --}}
                    <div class="form-group">
                        <label for="students_in_group">Students in Group</label>
                        <input type="number" name="students_in_group" id="students_in_group" class="form-control" required>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Please enter the number of students in the group.</div>
                    </div>

                    {{-- Picture --}}
                    <div class="form-group">
                        <label for="picture">Picture</label>
                        <input type="file" name="picture" id="picture" class="form-control">
                    </div>

                    {{-- Submit Button --}}
                    <button type="submit" class="btn btn-primary">Create Course</button>
                </form>
            </div>
        </div>

        <hr class="my-5">

    </div>
</div>




            
       



          
@endsection