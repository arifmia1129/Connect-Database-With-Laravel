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


    public function update() {
        $patient = Patient::find(3);

        $patient->floor = '5th';

        $patient->save();

        echo 'Successfully updated patient information';
    }


    public function delete() {
        $patient = Patient::find(3);

        $patient->delete();

        echo 'Patient information deleted successfully';
    }


    public function mass() {
        // Patient::create([
        //     'name'=>'Ariba',
        //     'mobile'=>'1234567',
        //     'floor'=>'6th',
        //     'bed'=>'ABC'
        // ]);

        // echo 'Successfully inserted data';


        $patient = Patient::find(1);

        $patient->update([
            'name'=>'Abdullah'
        ]);

        echo 'Successfully updated data';
    }
}
