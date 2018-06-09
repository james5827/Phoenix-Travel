<?php

namespace App\Http\Controllers;

use App\Http\Requests\StaffRequest;
use App\Staff;

class StaffController extends Controller
{
    public function index(Staff $s)
    {
        $staff = Staff::get(['id', 'Name', 'Email', 'Authorisation_Level']);
        $attributes = array_keys($staff[0]->toArray());

        return view('staff.index')->with(['dataset' => $staff, 'attributes' => $attributes, 'controller' => 'staff', 'key' => [$s->getKeyName()]]);
    }

    public function show(Staff $staff)
    {
        $data = Staff::where("id", $staff->id)->first(['Id', 'Name', 'Email', 'Authorisation_Level']);

        return view('staff.show')->with(['record' => $data, 'controller' => 'staff',]);
    }

    public function create(Staff $staff)
    {
        return view('staff.create')->with(['staff' => $staff, 'method' => 'POST', 'action' => 'staff/store']);
    }

    public function store(StaffRequest $request)
    {
        Staff::create([
                'Name' => $request->Name,
                'Email' => $request->Email,
                'Password' => bcrypt($request->Password),
                'Authorisation_Level' => $request->Authorisation_Level
            ]);

        return redirect('/staff');
    }

    public function edit(Staff $staff)
    {
        return view('staff.edit')->with(['staff' => $staff, 'method' => 'PUT', 'action' => 'staff/' . $staff->id . '/update']);
    }

    public function update(StaffRequest $request, Staff $staff)
    {
        $staff->name = $request->Name;
        $staff->email = $request->Email;
        $staff->password = bcrypt($request->Password);
        $staff->authorisation_level = $request->Authorisation_Level;

        $staff->save();

        return redirect('/staff');
    }

    public function destroy(Staff $staff)
    {
        $staff->delete();
        return redirect('/staff');
    }
}
