<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;

class order_controller extends Controller
{
    //
    function new_orders(Request $request){
        $order_details = new order();
        $order_details->productName = $request->productName;
        $order_details->productId = $request->productId;
        $order_details->productDescription = $request->productDescription;
        $order_details->productPrice = $request->productPrice;
        $order_details->productSize = $request->productSize;
        $order_details->quantity = $request->quantity;
        $order_details->totalPrice = $request->totalPrice;
        $order_details->buyername = $request->buyername;
        $order_details->address	 = $request->address;
        $order_details->phone = $request->phone;
        $order_details->save();
        return response()->noContent();
    }
}
