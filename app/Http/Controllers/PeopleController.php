<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PeopleController extends Controller
{
    public function index() {
        // $data = People::all();

        $data = Cache::remember('people',60, function (){
            return People::all();
        });

        foreach($data as $people) {
            echo $people->name.'<br><br>';
        }
    }
}
