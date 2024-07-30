<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DefaultPackagePerpetualSeat;

class DefaultPackagePerpetualSeatController extends Controller
{
    //DefaultPackagePerpetualSeat

    public function default_perpetual_seat_store(Request $request)
    {
        $full_degree = new DefaultPackagePerpetualSeat;
        $full_degree->program_type = $request->program_type;
        $full_degree->degree = $request->degree;
        $full_degree->totalAmount = $request->totalAmount;
        $full_degree->donor_name = $request->donor_name;
        $full_degree->donor_email = $request->donor_email;
        $full_degree->phone = $request->phone;
        $full_degree->about_partner = $request->about_partner;
        $full_degree->country = $request->country;
        $full_degree->year = $request->year;
        $full_degree->payments_status = $request->payments_status;
        if ($request->hasFile('prove')) {
            $file = $request->file('prove');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('defult_package_perpetual_seat'), $fileName); // Save in full_degree_prove folder
            $full_degree->prove = $fileName;
        }
        $full_degree->save();
        return back()->with('success', 'Data saved successfully!');

    }
}
