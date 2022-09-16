<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{

    public function store(Request $request)
    {
        if ($request) {
            $dataValidate = $request->validate([
                'name'  => 'required|string',
                'email' => 'required|string',
                'mobile' => 'required|numeric'

            ]);
            dd($dataValidate);
            $customer = new Customer;
            $customer->name = $request->name;
            $customer->email = $request->email;
            $customer->mobile = $request->mobile;
            $customer->save();

            //return redirect()->route();
            return view('step-2', compact('customer'));

        }
    }
}
