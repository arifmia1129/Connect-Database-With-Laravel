<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{

    public function index() {
        // $all_customer = Customer::all();

        $all_customer = DB::select('select * from customers');
        // $all_customer = DB::select('select * from customers where email=?', ['ariba@gmail.com']);


         // $customer_info = Customer::find(1);
        // $customer_info->phone = '013';

        // $customer_info->save();


        // $customer_info = Customer::find(2);

        // $customer_info->delete();

        // Customer::where('id', 2) ->restore();

        // Customer::where('id', 3) -> forceDelete();

        // DB::update('update customers set name=? where email=?', ['Ariba Binte Arif', 'ariba@gmail.com']);

        // DB::delete('delete from customers where id=?', [4]);


        // return view('customer', compact('all_customer'));

        // $customers = DB::table('customers')->get();
        // $customers = DB::table('customers')->where('id', '>', '3')->where('id', '<', '10')->get();


        $customer = DB::table('customers')->find(2);

        dd($customer);

    }

    public function store() {
        // $customer = new Customer();
        // $customer->name = "Md. Borhan Kabir Shahin";
        // $customer->email = "shahin@gmail.com";
        // $customer->phone = "015";

        // $customer->save();

        // DB::insert('insert into customers (name, phone, email) values(?, ?, ?)', ['Ariba', '123', 'ariba@gmail.com']);

        DB::table('customers')->insert([
            [
                'name'=>'Abdullah',
                'phone'=>'1234',
                'email'=>'abdullah@gmail.com'
            ]
            ]);

        echo 'Successfully created customer';
    }

    public function update() {

        $data = [
            'name'=>'Md. Arif Mia',
        ];

        DB::table('customers')->where('id', 2)->update($data);

        echo 'Successfully updated customer data';
    }

    public function delete ($id) {
        DB::table('customers')->where('id', $id)->delete();

        echo 'Successfully deleted customer information';
    }

    public function balance() {
      $result =  DB::table('customers')->join('balances', 'customers.id', '=', 'balances.customer_id')->select('balances.*', 'customers.name')->get();

      dd($result);
    }

}
