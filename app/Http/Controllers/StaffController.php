<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index(Staff $s)
    {
        $staff = Staff::get();
        $attributes = array_keys($staff[0]->toArray());

        return view('staff.index')->with(['dataset' => $staff, 'attributes' => $attributes, 'controller' => 'staff', 'key' => [$s->getKeyName()]]);
    }
}
