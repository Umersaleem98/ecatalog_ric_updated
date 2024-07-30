<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{

    public function index()
{
    $user = Auth::user();

    // Define the disciplines
    $disciplines = [
        'Engineering & IT',
        'Natural Sciences',
        'Social Sciences',
        'Bio Sciences',
        'Management Sciences',
        'Business Studies',
        'Biotechnology',
        'CE',
        'Bachelor of Business Administration',
        'MS in Clinical Psychology',
        'Architecture',
        'Chemical Engineering',
        'Bachelor of Science in Mass Communication',
    ];

    // Fetch the count of students in each discipline
    $disciplineCounts = [];
    foreach ($disciplines as $discipline) {
        $disciplineCounts[$discipline] = Student::where('discipline', $discipline)->count();
    }

    return view('dashboard', compact('user', 'disciplineCounts'));
}


    public function view_data(Request $request)
    {
        $searchQuery = $request->input('query');

        // Fetch students data with optional search query
        $students = Student::when($searchQuery, function ($query) use ($searchQuery) {
            $query->where('name', 'like', '%' . $searchQuery . '%')
                  ->orWhere('father_name', 'like', '%' . $searchQuery . '%')
                  ->orWhere('institution', 'like', '%' . $searchQuery . '%')
                  ->orWhere('discipline', 'like', '%' . $searchQuery . '%')
                  ->orWhere('scholarship_name', 'like', '%' . $searchQuery . '%')
                  ->orWhere('province', 'like', '%' . $searchQuery . '%')
                  ->orWhere('gender', 'like', '%' . $searchQuery . '%')
                  ->orWhere('program', 'like', '%' . $searchQuery . '%')
                  ->orWhere('degree', 'like', '%' . $searchQuery . '%')
                  ->orWhere('year_of_admission', 'like', '%' . $searchQuery . '%')
                  ->orWhere('father_status', 'like', '%' . $searchQuery . '%')
                  ->orWhere('father_profession', 'like', '%' . $searchQuery . '%')
                  ->orWhere('monthly_income', 'like', '%' . $searchQuery . '%');
        })->get();

        return view('admin.screens.students_list', compact('students', 'searchQuery'));
    }

    public function store(Request $request)
    {

        $students = new Student;
        $students->name= $request->name;
        $students->father_name= $request->father_name;
        $students->institution= $request->institution;
        $students->discipline= $request->discipline;
        $students->scholarship_name= $request->scholarship_name;
        $students->province= $request->province;
        $students->gender= $request->gender;
        $students->program= $request->program;
        $students->city= $request->city;
        $students->degree= $request->degree;
        $students->year_of_admission= $request->year_of_admission;
        $students->father_status= $request->father_status;
        $students->father_profession= $request->father_profession;
        $students->monthly_income= $request->monthly_income;
        $students->statement_of_purpose= $request->statement_of_purpose;
        $students->images= $request->images;
        $students->save();

        return redirect()->back()->with('success', 'Payment successfully made.');
    }

    public function edit($id)
    {
        $students = Student::find($id);
        return view('admin.screens.update_students', compact('students'));
    }


    public function update(Request $request, $id)
    {
        // Find the student record by ID
        $student = Student::findOrFail($id);

        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'institution' => 'required|string|max:255',
            'discipline' => 'required|string|max:255',
            'scholarship_name' => 'required|string|max:255',
            'donor_name' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'program' => 'required|string|max:255',
            'degree' => 'required|string|max:255',
            'year_of_admission' => 'required|numeric',
            'father_status' => 'required|string|max:255',
            'father_profession' => 'required|string|max:255',
            'monthly_income' => 'required|numeric',
            'statement_of_purpose' => 'nullable|string',
            'images' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update the student record with the validated data
        $student->update($validatedData);

        // Handle file upload if 'images' is included in the form
        if ($request->hasFile('images')) {
            // Check if there is an existing image
            if ($student->images) {
                // Define the image path
                $existingImagePath = public_path('students_images') . '/' . $student->images;

                // Delete the existing image if it exists
                if (file_exists($existingImagePath)) {
                    unlink($existingImagePath);
                }
            }

            // Process and move the new uploaded image
            $file = $request->file('images');
            $fileName = time() . '_' . $file->getClientOriginalName();
            if ($file->move(public_path('students_images'), $fileName)) {
                // Update the images attribute on the student model
                $student->images = $fileName;
            } else {
                // Handle file upload error
                return redirect()->back()->with('error', 'Failed to upload image');
            }
        }

        // Save the student model with updated data and image
        $student->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Student updated successfully');
    }

    public function messages()
    {
        $message = Message::orderBy('created_at', 'desc')->paginate(3);
        return view('admin.contact_us.contactus', compact('message'));
    }
}
