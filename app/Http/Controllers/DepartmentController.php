<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{

    // get all departments

    public function listDe()
    {
        $departments = DB::table('departments')
            ->select('departments.name', 'departments.phone_number')
            ->get();

        return view('listDe', [
            'departments' => $departments
        ]);
    }
}
