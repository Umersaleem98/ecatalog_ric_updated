<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\SupportPleagePayment;
use App\Models\SupportScholarPayment;

class SupportScholarPaymentController extends Controller
{
    public function payment_index($id)
    {
        $students= Student::find($id);
        return view('template.payments.payment', compact('students'));
    }


    public function Make_a_Pledge($id)
    {
        $students= Student::find($id);
        return view('template.payments.Make_a_Pledge', compact('students'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'student_name' => 'required|string|max:255',
            'donor_name' => 'required|string|max:255',
            'donor_email' => 'required|email|max:255',
            'duration' => 'required|integer',
            'amount' => 'required|numeric',
            'payment_approved' => 'required|boolean', // Ensure payment_approved is validated
            'prove' => 'required_if:payment_approved,true|file|mimes:jpeg,png,pdf|max:2048', // Validate prove file if payment_approved is true
        ]);

        // Check if the same donor has already made a payment for the same student


        // Handle file upload for 'prove' field
        if ($request->hasFile('prove')) {
            $file = $request->file('prove');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('payment_prove'), $fileName);
        } else {
            // If prove file is not provided but payment is approved, return error
            return redirect()->back()->withErrors(['prove' => 'Prove file is required if payment is approved.']);
        }

        // Create a new Payment instance
        $payment = new SupportScholarPayment;
        $payment->student_name = $request->student_name;
        $payment->donor_name = $request->donor_name;
        $payment->donor_email = $request->donor_email;
        $payment->duration = $request->duration;
        $payment->amount = $request->amount;
        $payment->payment_approved = $request->payment_approved;
        $payment->prove = $fileName ?? null; // Assign fileName if it's set

        // Save the Payment instance to the database
        $payment->save();

        // Update the payment_approved field in the Student model
        $student = Student::where('name', $request->student_name)->first();

        if ($student) {
            $student->payment_approved = false;
            $student->save();
        }

        // Return a response, redirecting back with a success message
        return redirect()->back()->with('success', 'Payment successfully made.');
    }




    public function pledge_store(Request $request)
    {
        $request->validate([
            'student_name' => 'required|string',
            'donor_name' => 'required|string',
            'donor_email' => 'required|email',
            'phone' => 'required|string',
            'donation_percent' => 'required|integer',
            'donation_for' => 'required|string',
        ]);

        // Create a new Payment instance
        $payment = new SupportPleagePayment;
        $payment->student_name = $request->student_name;
        $payment->donor_name = $request->donor_name;
        $payment->donor_email = $request->donor_email;
        $payment->phone = $request->phone;
        $payment->donation_percent = $request->donation_percent;
        $payment->donation_for = $request->donation_for;
        $payment->pledge_approved = "0";  // Default to false or set based on your logic
        $payment->save();

        // Find the corresponding student
        $student = Student::where('name', $request->student_name)->first();

        if ($student) {
            // Update the pledge_approved field
            $student->make_pledge = "0";  // Set this based on your requirements
            $student->save();
        }

        // Return a response, redirecting back with a success message
        return redirect()->back()->with('success', 'Payment successfully made and student pledge status updated.');
    }



public function approved_pledge($id)
{
    $payment = SupportPleagePayment::find($id);
    $payment->pledge_approved = true;
    $payment->save();

    return redirect()->back()->with('success', 'Pledge approved successfully.');

}



public function approved_payment($id)
{
    $payment = SupportScholarPayment::find($id);
    $payment->payment_approved = true;
    $payment->save();

    return redirect()->back()->with('success', 'Pledge approved successfully.');

}

}
