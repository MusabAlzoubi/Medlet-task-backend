<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function showProfile()
    {
        $user = Auth::user(); // Retrieve the authenticated user
        return view('auth.users.profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
            $user = Auth::user();
            
            $validationRules = [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
                'phone' => 'nullable|string',
                'gender' => 'required|in:male,female',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ];

            if ($user->isInstructor()) {
                $validationRules['specialty'] = 'nullable|in:' . implode(',', Specialty::getAllSpecialties());
            } elseif ($user->isStudent()) {
                $validationRules['full_name_arabic'] = 'nullable|string';
                $validationRules['full_name_english'] = 'nullable|string';
                $validationRules['university_id'] = 'nullable|string';
                $validationRules['gpa'] = 'nullable|numeric';
            }

            $request->validate($validationRules);

            // Update the user's common fields
            $user->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'gender' => $request->input('gender'),
            ]);

                // Handle image upload
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move('images/user', $imageName);
                $user->image = $imageName;
                $user->save();
            }

            // Update additional fields based on the role
            if ($user->isStudent()) {
                $user->student()->update([
                    'full_name_arabic' => $request->input('full_name_arabic'),
                    'full_name_english' => $request->input('full_name_english'),
                    'university_id' => $request->input('university_id'),
                    'gpa' => $request->input('gpa'),
                ]);
            } elseif ($user->isInstructor()) {
                $user->instructor()->update([
                    'specialty' => $request->input('specialty'),
                ]);
            }

            return redirect()->route('user.profile')->with('success', 'Profile updated successfully.');
    }
}
