<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class CredentialController extends Controller
{
    public function index()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Attempt to log the user in
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            // Authentication passed, redirect to intended route or home
            return redirect()->intended('/dashboard');
        }

        // Authentication failed, redirect back with input
        return redirect()->back()
            ->withInput($request->only('email'))
            ->withErrors(['email' => 'These credentials do not match our records.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function store_user(Request $request)
    {

        // Create a new user instance and assign the validated data
        $users = new User;
        $users->name = $request['name'];
        $users->email = $request['email'];
        $users->password = bcrypt($request['password']); // Hash the password

        // Save the users to the database
        $users->save();

        // Return a response, such as redirecting to a specific page or returning a JSON response
        return redirect()->back()->with('success', 'User created successfully.');
    }

}
