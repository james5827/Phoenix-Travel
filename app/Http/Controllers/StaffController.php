<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        $staff = Staff::get();
        $s = new Staff;
        $attributes = array_keys($staff[0]->toArray());

        return view('staff.index')->with(['dataset' => $staff, 'attributes' => $attributes, 'controller' => 'staff', 'key' => $s->getKeyName()]);
    }
}
