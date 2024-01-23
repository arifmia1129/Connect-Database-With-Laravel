<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index() {
        $worker = Worker::find(1);
        echo $worker->name.'<br>';
        echo $worker->mobile.'<br>';
        echo $worker->profile->blood_group.'<br>';
    }
}
