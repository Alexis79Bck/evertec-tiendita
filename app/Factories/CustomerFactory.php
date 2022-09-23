<?php

namespace App\Factories;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerFactory
{
    /**
     * Método saveCustomer
     * @param Request $request
     * @return Customer
     *
     * Guarda un nuevo Customer y devuelve el modelo creado.
     */
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
    /**
     * Método validateInfo
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     *
     * Valida los datos del Customer que haya sido escrito en el formulario.
     */
    protected function validateInfo(array $data)
    {
        return  Validator::make($data, [
            'name' => 'required|string|max:80',
            'email' => 'required|string|max:120',
            'mobile' => 'required|string|max:20',
        ]);
    }




}
