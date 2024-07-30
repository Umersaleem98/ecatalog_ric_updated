<?php

namespace App\Http\Controllers;

use App\Models\FundAProject;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;


class FundAProjectController extends Controller
{
    public function select_project_fund()
    {    $project_category = ProjectCategory::all();
        return view('template.fund_project.select_project', compact('project_category'));
    }

    public function fund_project_screen($id)
    {
        $project_category = ProjectCategory::find($id);
        return view('template.fund_project.fund_screen', compact('project_category'));
    }


    public function payments_project($id)
    {
        $project_category = ProjectCategory::find($id);
        return view('template.payments.payment_fund_a_project', compact('project_category'));
    }


    public function payment_fund_a_project(Request $request)
    {
        $payments = new FundAProject;
        $payments->project_name = $request->project_name;
        $payments->donor_name = $request->donor_name;
        $payments->donor_email = $request->donor_email;
        $payments->phone = $request->phone;
        $payments->amount_for = $request->amount_for;
        $payments->amount = $request->amount;
        $payments->save();
        return redirect()->back()->with('success', 'Payment successfully made.');
    }
}
