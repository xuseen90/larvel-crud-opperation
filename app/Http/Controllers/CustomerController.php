<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function index()
    {
        $customer = Customer::get();
        return view('customer.listAllCustomer',compact('customer'));
    }
    
    public function create()
    {
        return view('customer.CreateCustomer');
    }

    public function store(Request $request) 
    {
        $request->validate([
            'name' => 'required|max:255|string',
            'tell' => 'required|max:255|string',
            'email' => 'required|max:255|string',
            'address' => 'required|max:255|string'
        ]);

        Customer::create([
            'name' => $request->name,
            'tell' => $request->tell,
            'email' =>$request->email,
            'address' =>$request->address,
        ]);

        return redirect("/create")->with("status","Customer is Created");
    }

    public function edit(int $id) 
    {
        $customer = Customer::findOrFail($id);
        return view('customer.editCustomer',compact('customer'));
    }

    public function update(Request $request , int $id) 
    {
        $request->validate([
            'name' => 'required|max:255|string',
            'tell' => 'required|max:255|string',
            'email' => 'required|max:255|string',
            'address' => 'required|max:255|string'
        ]);

        Customer::findOrFail($id)->update([
            'name' => $request->name,
            'tell' => $request->tell,
            'email' =>$request->email,
            'address' =>$request->address,
        ]);

        return redirect()->back()->with("status","Update is Successfully");
    }

    public function delete(int $id) {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect()->back();
    }
}
