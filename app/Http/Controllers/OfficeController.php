<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfficeController extends Controller
{
    public function employee(Request $request)
    {
        return view('office.employee');
    }
}
