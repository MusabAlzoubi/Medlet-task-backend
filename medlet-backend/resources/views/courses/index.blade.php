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
<!-- Basic Bootstrap Table -->
<div class="card">
  <div class="card-header d-flex justify-content-between align-items-center">
    <h5 class="mb-0">Course List</h5>
    <a href="{{ route('courses.create') }}" class="btn btn-primary">Create New Course</a>
</div>
  <h5 class="card-header">Table Basic</h5>
  <div class="table-responsive text-nowrap">
      <table class="table">
          <thead>
              <tr>
                  <th>Course Name</th>
                  <th>Elective</th>
                  <th>Weeks</th>
                  <th>Students in Group</th>
                  <th>Picture</th>
                  <th>Actions</th>
              </tr>
          </thead>
          <tbody class="table-border-bottom-0">
              @foreach($courses as $course)
              <tr>
                  <td>{{ $course->course_name }}</td>
                  <td>{{ $course->is_elective ? 'Yes' : 'No' }}</td>
                  <td>{{ $course->weeks }}</td>
                  <td>{{ $course->students_in_group }}</td>
                  <td>
                      @if($course->picture)
                          <img src="{{ asset('images/Course/'.$course->picture) }}" alt="Course Picture" class="rounded-circle" style="max-width: 50px; max-height: 50px;">
                      @else
                          No Picture
                      @endif
                  </td>
                  <td>
                      <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu">
                              <a class="dropdown-item" href="{{ route('courses.edit', $course->id) }}">
                                  <i class="bx bx-edit-alt me-2"></i> Edit
                              </a>
                              <form action="{{ route('courses.destroy', $course->id) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="dropdown-item" onclick="return confirm('Are you sure you want to delete this course?')">
                                      <i class="bx bx-trash me-2"></i> Delete
                                  </button>
                              </form>
                          </div>
                      </div>
                  </td>
              </tr>
              @endforeach
          </tbody>
      </table>
  </div>
</div>
<!--/ Basic Bootstrap Table -->



<hr class="my-5">



            
     






          
@endsection