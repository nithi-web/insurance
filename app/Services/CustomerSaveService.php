<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use  App\Models\Customer;

class CustomerSaveService
{
    // public $customer;
    public function insert_customer(Request $request)
    {
        $customer = new Customer();
        $customer->first_name = $request->first_name;
        $customer->phone_number = $request->phone_number;
        $customer->address = $request->address;
        $customer->place = $request->place;
        $customer->save();
    }
}
