<?php
// app/Http/Controllers/Auth/RegisterController.php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Student;
use App\Models\Instructor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;

class RegisterController extends Controller
{

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['nullable', 'string', 'max:20'],
            'gender' => ['nullable', 'string', 'in:male,female'],
            'image' => ['nullable', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'in:student,instructor'],
            'full_name_arabic' => ['nullable', 'string', 'max:255'],
            'full_name_english' => ['nullable', 'string', 'max:255'],
            'university_id' => ['nullable', 'string', 'max:255'],
            'gpa' => ['nullable', 'numeric'],
            'specialty' => ['nullable', 'string', 'max:255'],
        ]);
    }

    protected function create(Request $request)
    {
        $data = $request->all();

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'] ?? null,
            'gender' => $data['gender'] ?? null,
            'image' => $data['image'] ?? null,
            'password' => Hash::make($data['password']),
            'role_id' => ($data['role'] == 'student') ? 3 : 2,
        ]);

        if ($data['role'] == 'student') {
            Student::create([
                'user_id' => $user->id,
                'full_name_arabic' => $data['full_name_arabic'] ?? null,
                'full_name_english' => $data['full_name_english'] ?? null,
                'university_id' => $data['university_id'] ?? null,
                'gpa' => $data['gpa'] ?? null,
            ]);
        } elseif ($data['role'] == 'instructor') {
            Instructor::create([
                'user_id' => $user->id,
                'specialty' => $data['specialty'] ?? null,
            ]);
        }

        return ;
    }
}
