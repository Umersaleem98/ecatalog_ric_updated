<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectCategory;

class HostelController extends Controller
{

    public function select_project_fund()
    {
        $project_category = ProjectCategory::all();
        return view('template.fund_project.select_project',  compact('project_category'));
    }

    public function fund_project_screen($id)
    {
        $project_category = ProjectCategory::find($id);
        return view('template.fund_project.fund_screen',compact('project_category'));
    }
    public function payments_project($id)
    {
        $project_category = ProjectCategory::find($id);
        return view('template.fund_project.payments_project', compact('project_category'));
    }
}
