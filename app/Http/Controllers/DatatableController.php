<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class DatatableController extends Controller
{
    public function Employee()
    {
        $employees = Employee::all();
        return json_encode($employees);
    }
}
