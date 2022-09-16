<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class OrderController extends Controller
{
    public function newOrder()
    {
        return view('step-1');
    }

    public function detailOrder()
    {
        return view('step-2');
    }

    public function proceedOrder()
    {
        return view('step-2');
    }
}
