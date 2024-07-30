<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'images' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $users = new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('users_images'), $imageName);
            $users->image = $imageName;
        }

        $users->save();

        return redirect()->back()->with('success', 'User created successfully.');
    }


    public function edit($id)
    {
        $users = User::find($id);
        return view('admin.users.edit', compact('users'));
    }

    public function update(Request $request, $id)
{
    // Validate the incoming request data
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email,' . $id,
        'password' => 'nullable|string|min:8',
        'images' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'designation' => 'nullable|string|max:255',
        'gender' => 'nullable|string|max:10',
        'phone' => 'nullable|string|max:20',
    ]);

    // Find the user by ID
    $users = User::findOrFail($id);

    // Update users fields
    $users->name = $request->name;
    $users->email = $request->email;
    if ($request->filled('password')) {
        $users->password = bcrypt($request->password);
    }

    // Handle image upload
    if ($request->hasFile('images')) {
        // Check if the user has an existing image
        if ($users->images) {
            // Define the image path
            $existingImagePath = public_path('users_images') . '/' . $users->images;

            // Delete the existing image if it exists
            if (file_exists($existingImagePath)) {
                unlink($existingImagePath);
            }
        }

        // Upload the new image
        $images = $request->file('images');
        $imageName = time() . '.' . $images->getClientOriginalExtension();
        $images->move(public_path('users_images'), $imageName);
        $users->images = $imageName;
    }

    // Save the updated user
    $users->save();

    return redirect()->back()->with('success', 'User updated successfully');
}


public function delete($id)
{
    $users = User::find($id);
    $users->delete();
    return redirect()->back()->with('success', 'Team member delete successfully');
}

}
