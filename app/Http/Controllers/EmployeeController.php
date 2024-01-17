<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index() {
    //    echo 'Total employees: '. DB::table('employee') -> count();

    // echo 'Total salary: '. DB::table('employee')->sum('salary');
    // echo 'Average salary is: '.DB::table('employee')->avg('salary');
    // echo 'Maximum employee age is: '.DB::table('employee')->max('salary');
    echo 'Minimum employee age is: '.DB::table('employee')->min('salary');
    }
}
