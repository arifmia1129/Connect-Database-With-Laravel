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
    // echo 'Minimum employee age is: '.DB::table('employee')->min('salary');


    // $result = DB::table('employee')->select('designation', DB::raw('COUNT(*) as total_count'))->groupBy('designation')->get();

    // foreach($result as $item) {
    //     $designation  = $item->designation;
    //     $count = $item->total_count;

    //     echo 'Role: '. $designation .'<br>';
    //     echo 'Total: '.$count.'<br><br><br>';

    //     // dd($item);
    // }


    // $result = DB::table('employee')->select('designation', DB::raw('COUNT(*) as total_count'), DB::raw('AVG(salary) as avg_salary'), DB::raw('MAX(salary) as max_salary'))->groupBy('designation')->get();

    // foreach($result as $item) {
    //     $designation = $item->designation;
    //     $avg_salary = $item->avg_salary;
    //     $max_salary = $item->max_salary;
    //     $total_count = $item->total_count;

    //     echo 'Designation: '.$designation.'<br>';
    //     echo 'Average salary: '.$avg_salary.'<br>';
    //     echo 'Max salary: '.$max_salary.'<br>';
    //     echo 'Total employee: '.$total_count.'<br>';
    //     echo '<br><br><br>';
    // }

    // $result = DB::table('employee')->select('designation', DB::raw('COUNT(*) as total_count'))->groupBy('designation')->havingRaw('COUNT(*) > 1')->get();

    // foreach($result as $item) {
    //     $designation = $item->designation;
    //     $total_count = $item->total_count;

    //     echo 'Designation is: '.$designation.'<br>';
    //     echo 'Total employee: '.$total_count.'<br><br>';
    // }


    // $result = DB::table('employee')->orderBy('name', 'asc')->get();

    // foreach($result as $item) {
    //     echo $item->name.' - '. $item->designation;
    //     echo '<br><br>';
    // }


    // $result = DB::table('employee')->whereIn('id', [1, 3, 5])->get();

    // echo '<pre>';
    // print_r($result);


    // $result = DB::table('employee')->pluck('name');

    // $result = DB::table('employee')->whereNot('designation', 'Junior Software Developer')->get();

    // $result = DB::table('employee')->whereNotIn('designation', ['Software Developer', 'Junior Software Developer'])->get();

    // $result = DB::table('employee')->whereBetween('id', [3,6])->get();

    // $result = DB::table('employee')->whereNotBetween('id', [3, 6])->get();

    $result = DB::table('employee')->whereIn('id', function($query) {
        $query->select('employee_id')->from('devices')->groupBy('employee_id');
    })->get();

    echo '<pre>';
    print_r($result);

    }
}
