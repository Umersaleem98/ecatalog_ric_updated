<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()
    {
        $students = Student::all();
        return view('template.stories', compact('students'));
    }
    // public function student_stories(Request $request)
    // {
    //     $gender = $request->input('gender');
    //     $province = $request->input('province');
    //     $discipline = $request->input('discipline');
    //     $degree = $request->input('degree');

    //     $query = Student::query();

    //     if ($gender && $gender !== 'all') {
    //         $query->where('gender', $gender);
    //     }

    //     if ($province && $province !== 'all') {
    //         $query->where('province', $province);
    //     }

    //     if ($discipline && $discipline !== 'all') {
    //         $query->where('discipline', $discipline);
    //     }
    //     if ($degree && $degree !== 'all') {
    //         $query->where('degree', $degree);
    //     }

    //     $query->orderByRaw("CASE WHEN images = 'dummy.png' THEN 1 ELSE 0 END, images");

    //     $students = $query->paginate(8);

    //     return view('template.support_scholar.index', compact('students'));
    // }


    public function student_stories(Request $request)
    {
        $gender = $request->input('gender');
        $province = $request->input('province');
        $discipline = $request->input('discipline');
        $degree = $request->input('degree');
        $city = $request->input('city'); // Add city filter

        $query = Student::query();

        if ($gender && $gender !== 'all') {
            $query->where('gender', $gender);
        }

        if ($province && $province !== 'all') {
            $query->where('province', $province);
        }

        if ($discipline && $discipline !== 'all') {
            $query->where('discipline', $discipline);
        }

        if ($degree && $degree !== 'all') {
            $query->where('degree', $degree);
        }

        if ($city && $city !== 'all') { // Add city condition
            $query->where('city', $city);
        }

        $query->orderByRaw("CASE WHEN images = 'dummy.png' THEN 1 ELSE 0 END, images");

        $students = $query->paginate(8);

        if ($request->ajax()) {
            $studentsHtml = view('template.support_scholar.partials.students', compact('students'))->render();
            $paginationHtml = view('template.support_scholar.partials.pagination', compact('students'))->render();
            return response()->json(['studentsHtml' => $studentsHtml, 'paginationHtml' => $paginationHtml]);
        }


        return view('template.support_scholar.index', compact('students'));
    }

    public function student_stories_ind($id)
    {
        $events = Event::all();
        $students = Student::find($id); // Use findOrFail to handle non-existent IDs gracefully

        // Access the make_pledge and payment_approved attributes with default value 0
        $isPledgeApproved = $students->make_pledge ?? 0;
        $isPaymentApproved = $students->payment_approved ?? 0;

        // dd($isPaymentApproved);

        return view('template.support_scholar.student_stories', compact('events', 'students', 'isPledgeApproved', 'isPaymentApproved'));
    }



}
