<?php

namespace App\Http\Controllers;

use App\Jobs\SendNotification;
use App\Models\People;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PeopleController extends Controller
{
    public function index() {
        $data = People::paginate(10);

        return view('people', compact('data'));

        // $data = Cache::remember('people',60, function (){
        //     return People::all();
        // });

        // foreach($data as $people) {
        //     echo $people->name.'<br><br>';
        // }

        // $people = new People;

        // $people->name = 'Arif';
        // $people->email = 'arif@gmail.com';
        // $people->save();

        // SendNotification::dispatch();

        // dd('People added successfully and email sending is in processing...');
    }
}
