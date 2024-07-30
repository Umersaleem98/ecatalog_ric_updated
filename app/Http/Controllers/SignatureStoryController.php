<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SignatureStory;

class SignatureStoryController extends Controller
{

    public function index()
    {
        return view('layouts.signature_stories.index');
    }

    public function store(Request $request)
    {
        $SignatureStories = new  SignatureStory;
    $SignatureStories->title = $request->title;
    $SignatureStories->content = $request->content;

    // Handle image upload
    if ($request->hasFile('images')) {
        $image = $request->file('images');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('signature_storie_images'), $imageName);
        $SignatureStories->images = $imageName;
    }

    $SignatureStories->save();

    return redirect()->back()->with('success', 'Signature Story added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $SignatureStories = SignatureStory::paginate(10); // Change 10 to the number of items per page you want
        return view('layouts.signature_stories.signature_stories_list', compact('SignatureStories'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $SignatureStories = SignatureStory::find($id);
        return view('layouts.signature_stories.edit', compact('SignatureStories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Find the SignatureStory by its ID
        $SignatureStories = SignatureStory::find($id);

        // Check if the SignatureStory exists
        if (!$SignatureStories) {
            return redirect()->back()->with('error', 'Signature Story not found');
        }

        // Update the fields with the new values
        $SignatureStories->title = $request->input('title');
        $SignatureStories->content = $request->input('content');

        // Handle image upload if a new image is provided
        if ($request->hasFile('images')) {
            // Validate the uploaded file
            $request->validate([
                'images' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Adjust max file size as needed
            ]);

            // Check if there is an existing image
            if ($SignatureStories->images) {
                // Define the image path
                $existingImagePath = public_path('signature_storie_images') . '/' . $SignatureStories->images;

                // Delete the existing image if it exists
                if (file_exists($existingImagePath)) {
                    unlink($existingImagePath);
                }
            }

            // Process and move the uploaded image
            $image = $request->file('images');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('signature_storie_images'), $imageName);

            // Update the images field with the new image name
            $SignatureStories->images = $imageName;
        }

        // Save the updated SignatureStory
        $SignatureStories->save();

        // Redirect back with a success message
        return view('layouts.signature_stories.signature_stories_list')->with('success', 'Signature Story updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $SignatureStories = SignatureStory::find($id);
        $SignatureStories->delete();
        return redirect()->back()->with('success', 'Signature Story deleted successfully');

    }

    public function signrature_program()
    {
        $SignatureStories = SignatureStory::all();
         return view('template.signrature_program', compact('SignatureStories'));
    }
}
