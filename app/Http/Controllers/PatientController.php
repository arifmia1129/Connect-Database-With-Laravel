<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function create() {
        $patient = new Patient;

        $patient->name='Hannan';
        $patient->mobile='01555555';
        $patient->floor='4th';
        $patient->bed='A6';

        $patient->save();

        echo 'Successfully inserted patient information';
    }


    public function show() {
        // $res = Patient::all();
        // $res = Patient::get();

        // $res = Patient::where('floor', '4th')->orderBy('name', 'asc')->get();

        $res = Patient::where('floor', '4th')->first();

        dd($res);

        // foreach($res as $patient) {
        //     echo $patient->name.' - '.$patient->mobile.'<br>';
        //     echo '<br><br>';
        // }
    }
}