<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    public function ecommerce()
    {
        return view('ecommerce.index');
    }
    public function cart()
    {
        return view('ecommerce.cart');
    }
    public function orders()
    {
        return view('ecommere.orders');
    }
    public function orderDetails()
    {
        return view('ecommerce.order-details');
    }
}
