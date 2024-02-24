<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class product_controller extends Controller
{
    //
    function the_products(Request $request){
        $filename = '';
        if ($request->hasFile('productImage')) {
            $image = $request->file('productImage'); // Use 'productImage' instead of 'image'
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/assets/images/'), $filename);
            $filename = $request->getSchemeAndHttpHost() . '/assets/images/' . $filename;
        }
        
        $product = new products();
        $product -> productImage = $filename;
        $product -> productName = $request -> productName;
        $product -> productPrice = $request -> productPrice;
        $product -> id = $request -> id;
        $product -> productDescription = $request -> productDescription;
        $product -> productCategory = $request -> productCategory;
        $product -> productsize = $request -> productsize;
        $product->save();
        return view('home');
    }

    function delete($id){
        $data = products::find($id);
        $data->delete();
        return view('home');
    }
}
