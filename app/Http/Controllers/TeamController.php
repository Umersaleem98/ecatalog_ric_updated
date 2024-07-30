<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Event;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function team()
    {
        $events = Event::all();
        $teams = Team::where('status', 'active')->get(); // Filter teams with status 'active'

        return view('template.teams.teams', compact('events', 'teams'));
    }
    public function index()
    {
        return view('admin.team.index');
    }

    public function show()
    {
        $teams = Team::all();
        return view('admin.team.team_list', compact('teams'));
    }

    public function store(Request $request)
{
    $teamMember = new Team();
    $teamMember->name = $request->name;
    $teamMember->email = $request->email;
    $teamMember->designation = $request->designation;
    $teamMember->gender = $request->gender;
    $teamMember->phone = $request->phone;


    // Handle image upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('team'), $imageName);
        $teamMember->image = $imageName;
    }
    $teamMember->social_media = $request->social_media;
    $teamMember->save();

    return redirect()->back()->with('success', 'Team member added successfully');
}

public function edit($id)
{

    $teams = Team::find($id);
    return view('admin.team.edit', compact('teams'));
}

public function update(Request $request, $id)
{

    $teamMember = Team::find($id);
    $teamMember->name = $request->name;
    $teamMember->email = $request->email;
    $teamMember->designation = $request->designation;
    $teamMember->gender = $request->gender;
    $teamMember->phone = $request->phone;
    // Handle image upload
    if ($request->hasFile('image')) {
        // Check if the team member has an existing image
        if ($teamMember->image) {
            // Define the image path
            $existingImagePath = public_path('team') . '/' . $teamMember->image;

            // Delete the existing image if it exists
            if (file_exists($existingImagePath)) {
                unlink($existingImagePath);
            }
        }

        // Upload the new image
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('team'), $imageName);
        $teamMember->image = $imageName;
    }
    $teamMember->social_media = $request->social_media;
    // dd( $teamMember);
    $teamMember->save();

    return redirect()->back()->with('success', 'Team member updated successfully');
}


public function destory($id)
{
    $teams = Team::find($id);
    $teams->delete();
    return redirect()->back()->with('success', 'Team member delete successfully');
}




    public function meet_team($id)
    {
        $events = Event::all();
        $teams = Team::find($id);

        return view('template.teams.meet_our_team', compact('events','teams'));
    }
}
