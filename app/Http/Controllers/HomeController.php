<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index() {
        $all_customer = Customer::all();


        return view('customer', compact('all_customer'));
    }

    public function store() {
        $customer = new Customer();
        $customer->name = "Md. Borhan Kabir Shahin";
        $customer->email = "shahin@gmail.com";
        $customer->phone = "015";

        $customer->save();

        echo 'Successfully created customer';
    }
}
