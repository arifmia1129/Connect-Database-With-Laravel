<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelperController extends Controller
{
    public function index($marks) {
        echo resultCalculate($marks);
    }
}
