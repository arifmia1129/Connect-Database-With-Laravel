<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{

    public function index() {
        $all_customer = Customer::all();


         // $customer_info = Customer::find(1);
        // $customer_info->phone = '013';

        // $customer_info->save();


        // $customer_info = Customer::find(2);

        // $customer_info->delete();

        // Customer::where('id', 2) ->restore();

        // Customer::where('id', 3) -> forceDelete();


        return view('customer', compact('all_customer'));
    }

    public function store() {
        // $customer = new Customer();
        // $customer->name = "Md. Borhan Kabir Shahin";
        // $customer->email = "shahin@gmail.com";
        // $customer->phone = "015";

        // $customer->save();

        // DB::insert('insert into customers (name, phone, email) values(?, ?, ?)', ['Ariba', '123', 'ariba@gmail.com']);

        echo 'Successfully created customer';
    }

}
