<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Validator;

class AdminUserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('auth.users.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('auth.users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'nullable|string|max:20',
            'gender' => 'nullable|string|in:Male,Female',
            'image' => 'nullable',
            'password' => 'required|string|min:8|confirmed', // 'confirmed' ensures password_confirmation field is present and matches 'password'
            'role_id' => 'required|exists:roles,id',
        ]);
    
        // Redirect back if validation fails
        if ($validator->fails()) {
            return redirect()
                ->back() 
                ->withErrors($validator)
                ->withInput();
        }
    
          // Create the user after successful validation
    $user = User::create([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'phone' => $request->input('phone'),
        'gender' => $request->input('gender'),
        'password' => bcrypt($request->input('password')),
        'role_id' => $request->input('role_id'),
    ]);

    //  image upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move('images/user', $imageName);
        $user->image = $imageName;
        $user->save(); 
    }
    
        return redirect()->route('adminusers.index')->with('success', 'The user was added successfully.');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();

        return view('auth.users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
    
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'nullable|string|max:20',
            'gender' => 'nullable|string|in:Male,Female',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Assuming it's an image upload
            'password' => 'nullable|string|min:8|confirmed',
            'role_id' => 'required|exists:roles,id',
        ]);
    
        // Redirect back if validation fails
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
    
        // Update the user after successful validation
        $userData = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'gender' => $request->input('gender'),
            'role_id' => $request->input('role_id'),
        ];
    
        // Update password only if it's not empty
        if ($request->filled('password')) {
            $userData['password'] = bcrypt($request->input('password'));
        }
    
        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('images/user', $imageName);
            $userData['image'] = $imageName;
        }
    
        // Update the user model
        $user->update($userData);
    
        return redirect()->route('adminusers.index')->with('success', 'The user was updated successfully.');
    }
    

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('adminusers.index')->with('success', 'The user was deleted successfully.');
    }}
