<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// MODEL
use App\Models\customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customer_firstname = "Thana";
        $customer_lastname = "test";
        return view('customer.customer',compact('customer_firstname','customer_lastname'));
    }
    public function findAll(Request $request)
    {
        $customers = customer::all();
        return $customers;
    }

    public function findById(Request $request)
    {
        $customer = customer::findOrFail($request->id);
        return $customer;
    }

    public function create(Request $request){
        $customer = new customer();
        $customer->fname = $request->fname;
        $customer->lname = $request->lname;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->save();
        return $customer;
    }

    public function update(Request $request)
    {
        // $request->id : id is params
        $customer = customer::findOrFail($request->id);
        $customer->fname = $request->fname;
        $customer->lname = $request->lname;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->save();
        return $customer;
    }

    public function destroy(Request $request)
    {
        $ref = $request->id;
        $deleted = customer::findOrFail($ref);
        $deleted->delete();  
        return $deleted;

    }
    
}
