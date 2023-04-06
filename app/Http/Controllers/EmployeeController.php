<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    // get all employees
    public function listEmploy()
    {
        $all = DB::table('employees')
            ->leftJoin('relatives', 'employees.id', '=', 'relatives.employee_id')
            ->leftJoin('departments', 'departments.id', '=', 'employees.department_id')
            ->select('departments.name as deName', 'employees.id', 'employees.email', 'employees.name', 'employees.phone_number', DB::raw('count(relatives.employee_id) AS So_NGT'))
            ->groupBy('employees.id', 'employees.name', 'departments.name', 'employees.phone_number', 'employees.email')
            ->get();


        return view('listAll', [
            'eplys' => $all
        ]);
    }
}
