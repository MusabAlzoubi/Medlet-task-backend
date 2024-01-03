<?php

// app/Http/Controllers/CourseController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        // Check if the user is an instructor or admin
        // $this->authorize('view-courses');

        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        // Check if the user is an instructor or admin
        // $this->authorize('create-course');

        return view('courses.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'course_name' => 'required|string',
            'is_elective' => 'required|boolean',
            'weeks' => 'required|integer',
            'students_in_group' => 'required|integer',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // Create a new course
        $course = Course::create($request->all());
    
        // Image upload
        if ($request->hasFile('picture')) {
            $image = $request->file('picture');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('images/Course', $imageName);
            $course->picture = $imageName;
            $course->save();
        }
    
        return redirect()->route('courses.index')->with('success', 'Course added successfully');
    }



    public function edit($id)
    {
        // Retrieve the course by ID
        $course = Course::findOrFail($id);

        // Check if the user is authorized to edit this course
        // $this->authorize('edit-course', $course);

        return view('courses.edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'course_name' => 'required|string',
            'is_elective' => 'required|boolean',
            'weeks' => 'required|integer',
            'students_in_group' => 'required|integer',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // Find the course by ID
        $course = Course::findOrFail($id);
    
        // Update the course
        $course->update($request->all());
    
        // Image upload
        if ($request->hasFile('picture')) {
            $image = $request->file('picture');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('images/Course', $imageName);
            $course->picture = $imageName;
            $course->save();
        }
    
        return redirect()->route('courses.index')->with('success', 'Course updated successfully');
    }
    
    

    public function destroy($id)
    {
        // Find the course by ID
        $course = Course::findOrFail($id);

        // Delete the course
        $course->delete();

        return redirect()->route('courses.index')->with('success', 'Course deleted successfully');
    }
}
