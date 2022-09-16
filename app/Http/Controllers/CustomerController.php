<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Route;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function register(Request $request)
    {
        $this->validateInfo($request->all())->validate();
        $customer = $this->saveInfo($request->all());

        return response()->redirectToRoute('step-2');//view('step-2', ['customer'=>$customer, 'currentRoute'=> Route::currentRouteName()]);
    }

    protected function validateInfo(array $data)
    {
        return  Validator::make($data, [
            'name' => 'required|string|max:80',
            'email' => 'required|string|max:120',
            'mobile' => 'required|numeric',
        ]);
    }

    protected function saveInfo(array $data)
    {
        $customer = new Customer;
        $customer->name = $data['name'];
        $customer->email = $data['email'];
        $customer->mobile = $data['mobile'];
        $customer->save();

        return $customer;
    }
}
