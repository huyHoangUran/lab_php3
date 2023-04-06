<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Termwind\Components\Raw;

class ListController extends Controller
{
    // get all relatives

    public function listRela($id)
    {
        $relatives = DB::table('relatives')
            ->select('relatives.name', 'relatives.relations')
            ->where('relatives.employee_id', '=', $id)
            ->get();
        return view('listRela', [
            'relatives' => $relatives
        ]);
    }
}
