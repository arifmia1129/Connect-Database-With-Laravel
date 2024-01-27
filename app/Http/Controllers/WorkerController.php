<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use App\Models\WorkerProfile;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index() {
        // $worker = Worker::find(1);
        // echo $worker->name.'<br>';
        // echo $worker->mobile.'<br>';
        // echo $worker->profile->blood_group.'<br>';

        $res = WorkerProfile::with('worker')->find(2);

        echo $res->worker->name.'<br>';
        echo $res->worker->mobile.'<br>';
        echo $res->blood_group;
    }
}
