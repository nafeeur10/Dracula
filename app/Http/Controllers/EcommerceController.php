<?php

namespace App\Http\Controllers;

use App\Buyer;
use App\OrderDetails;
use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    public function secondBuyerEloquent()
    {
        $alluser =  OrderDetails::orderBy('total', 'DESC')->get();
        $buyer = $alluser[1];
        $name = Buyer::findOrFail($buyer->buyer_id)->name;
        return view('ecommerce.secondBuyerEloquent', compact('buyer', 'name'));
    }
}
