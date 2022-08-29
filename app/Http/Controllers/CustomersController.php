<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomersController extends Controller
{
    public function index(){
        $customers = Customer::all();
        return  view('customers', ['customers' => $customers] );
    }

    public function newcustomer(Request $request){
        if ($request->method() == 'POST'){
            $customer = new CUSTOMER();
            $customer->first_name = $request->get('firstname');
            $customer->last_name = $request->get('lastname');
            $customer->afm = $request->get('afm');
            $customer->email = $request->get('email');
            $customer->phone = $request->get('phone');
            if ($customer-> save()){
                echo "Καταχωρήθηκε με επιτυχία ο πελάτης";
            };


        }
        return  view('newcustomer');
    }



    
}
