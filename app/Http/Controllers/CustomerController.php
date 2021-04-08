<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Customer;

class CustomerController extends Controller
{
    public function welcome()
    {
        return view('welcome', ['customers' => Customer::whereBetween('customer_id', [141, 160])->get()]);
    }
}
