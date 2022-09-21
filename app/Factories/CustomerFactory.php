<?php

namespace App\Factories;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Interfaces\CustomerInterface;

class CustomerFactory
{
   
    public function saveCustomer(Request $request)
    {
        $this->validateInfo($request->all())->validate();
        $customer = new Customer;
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->mobile = $request->mobile;
        $customer->save();

        return $customer;

    }

    protected function validateInfo(array $data)
    {
        return  Validator::make($data, [
            'name' => 'required|string|max:80',
            'email' => 'required|string|max:120',
            'mobile' => 'required|string|max:20',
        ]);
    }


}
