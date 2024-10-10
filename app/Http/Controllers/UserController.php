<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    /*public function index(){

        // Fetch all users from the database
        $users = User::latest()->paginate(2);

        return view('admin.users.index' , compact('users'));
    }*/

    public function index(Request $request)
    {
        $searchTerm = $request->input('searchuser');
        
        // Fetch users based on the search term using the filter scope
        $users = User::latest()
            ->filter(['searchuser' => $searchTerm])
            ->paginate(2);

        return view('admin.users.index', compact('users'));
    }


    public function show($id)
    {
        $user = User::findOrFail($id); 
        return view('admin.users.show', compact('user'));
    }

    public function create(){
        return view('admin.users.add');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:3|confirmed',
            'phone' => 'nullable|string|max:20',
            'whatsapp_number' => 'nullable|string|max:20',
            'role' => 'required|string',  // Single role: admin, super user, or user
            'bio' => 'nullable|string',
            'user_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
        ]);
    
        // Hash the password
        $formFields['password'] = Hash::make($request->password);
    
        // Handle the image upload if present
        if ($request->hasFile('user_image')) {
            $imagePath = $request->file('user_image')->store('user_images', 'public');
            $formFields['user_image'] = $imagePath;
        }
    
        // Create the user with the role directly stored in the users table
        User::create($formFields);
    
        // Return a success notification
        return redirect()->back()->with([
            'notification_title' => 'User Created',
            'success_message' => 'User Created successfully!'
        ]);
    }

    public function edit($id) {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        // Validate input fields
        $formFields = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'username' => ['required', 'string', 'max:255', Rule::unique('users', 'username')->ignore($user->id)],
            'phone' => 'nullable|string|max:20',
            'whatsapp_number' => 'nullable|string|max:20',
            'role' => 'required|string',
            'bio' => 'nullable|string',
            'user_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
        ]);

        if ($request->hasFile('user_image')) {
            $imagePath = $request->file('user_image')->store('user_images', 'public');
            $formFields['user_image'] = $imagePath;
        }

        return redirect()->back()->with([
            'notification_title' => 'User updated',
            'success_message' => 'User updated successfully!'
        ]);
    }

    public function showLoginForm()
    {
        return view('admin.users.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'login' => 'required|string',
            'password' => 'required|string',
        ]);

        // Determine if the login is an email or a username
        if (filter_var($request->login, FILTER_VALIDATE_EMAIL)) {
            $loginType = 'email'; // If it's an email
        } else {
            $loginType = 'username'; // Otherwise, it's a username
        }

        // Attempt to log in with either email or username
        if (Auth::attempt([$loginType => $request->login, 'password' => $request->password])) {
            // Authentication passed, retrieve the authenticated user
            $user = Auth::user();

            // Redirect to the dashboard with a success message
            return redirect()->route('dashboard')->with([
                'notification_title' => 'Sign in',
                'success_message' => $user->first_name . ', you have successfully signed in!'
            ]);
        }

        // Authentication failed, redirect back with an error message
        return back()->withErrors([
            'login' => 'The provided credentials do not match our records.',
        ]);
    }


    public function lockscreen() {
        if (Auth::check()) {
            return view('admin.users.lockscreen'); // Show the lock screen
        }
    }

    public function unlock(Request $request)
    {
        // Validate the password input
        $request->validate([
            'password' => 'required|string',
        ]);

        // Get the currently authenticated user
        $user = Auth::user();

        // Check if the entered password matches the stored hashed password
        if (Hash::check($request->password, $user->password)) {
            // Unlock the session
            session(['locked' => false]);

            // Redirect to the intended page or dashboard
            return redirect()->intended('dashboard')->with('success_message', 'Session unlocked successfully!');
        }

        // If the password is incorrect, return an error message
        return back()->withErrors(['password' => 'Incorrect password.']);
    }


    public function logout(Request $request)
    {
        // Logout the user
        Auth::logout();

        // Invalidate the session
        $request->session()->invalidate();

        // Regenerate the session token to prevent session fixation
        $request->session()->regenerateToken();

        // Return a view with a 5-second delay
        return view('admin.users.logout'); // This will show a logout page for 5 seconds
    }


    public function destroy($id)
    {
        // Find the user by ID
        $user = User::findOrFail($id);

        // Check if the user's role is "su" (super user)
        if ($user->role === 'su') {
            return redirect()->back()->with([
                'notification_title' => 'Action Forbidden',
                'error_message' => 'You cannot delete a super user.'
            ]);
        }

        // If the user has an image, delete it from storage
        if ($user->user_image) {
            $imagePath = public_path('storage/' . $user->user_image);
            if (file_exists($imagePath)) {
                unlink($imagePath); // Delete the file
            }
        }

        // Delete the user
        $user->delete();

        // Redirect back with a success message
        return redirect()->route('users.index')->with([
            'notification_title' => 'User Deleted',
            'success_message' => 'The user has been deleted successfully.'
        ]);
    }


    public function editProfile()
    {
        // Get the authenticated user
        $user = Auth::user();

        // Return the view with user data
        return view('admin.users.myprofile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        // Validate the form fields
        $formFields = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'phone' => 'nullable|string|max:20',
            'whatsapp_number' => 'nullable|string|max:20',
            'bio' => 'nullable|string|max:1000',
            'user_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'role' => 'required|string',
        ]);

        // Only allow "admin" or "user" roles unless the authenticated user is a super user
        if ($user->role !== 'su') {
            // Restrict role change to "admin" or "user" for non-super users
            if (!in_array($formFields['role'], ['admin', 'user'])) {
                return redirect()->back()->withErrors(['error' => 'You are not authorized to assign the super user role.']);
            }
        }

        // Handle the image upload
        if ($request->hasFile('user_image')) {
            $imagePath = $request->file('user_image')->store('user_images', 'public');
            $formFields['user_image'] = $imagePath;
        }

        // Update the user's profile
        $user->update($formFields);

        return redirect()->back()->with(['notification_title' => 'Profile Updated',
            'success_message' => 'Profile updated successfully!']);
    }




    
    
    
}
