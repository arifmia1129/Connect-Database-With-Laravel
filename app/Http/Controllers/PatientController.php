<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function create() {
        $patient = new Patient();

        $patient->name='Arif';
        $patient->mobile='01849676331';
        $patient->floor='4th';
        $patient->bed='A1';

        $patient->save();

        echo 'Successfully inserted patient information';
    }
}
