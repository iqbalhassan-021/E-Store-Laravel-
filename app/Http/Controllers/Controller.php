<?php

namespace App\Http\Controllers;

use App\Models\person;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function home(){
        $producttype = DB::table('categories')->get();
        $slider = DB::table('slider')->get();
        $store = DB::table('storedetails')->get();
        $feauredproducts = DB::table('products')->take(3)->get();
        return view('home',[
            'producttype'=>$producttype,
            'slider'=>$slider,
            'feauredproducts'=> $feauredproducts,
            'store' => $store
        ]);
    }
    public function about(){
        $producttype = DB::table('categories')->get();
        $store = DB::table('storedetails')->get();
        return view('about',[
            'producttype'=>$producttype,
            'store'=> $store
        ]);
    }
    public function contact(){
        $producttype = DB::table('categories')->get();
        $store = DB::table('storedetails')->get();
        return view('contact',[
            'producttype'=>$producttype,
            'store'=> $store
        ]);
    }
    public function products(){
        $producttype = DB::table('categories')->get();
        $store = DB::table('storedetails')->get();
        $allproducts = DB::table('products')->get();
        $feauredproducts = DB::table('products')->take(3)->get();
        return view('products',[
            'producttype'=>$producttype,
            'allproducts'=> $allproducts,
            'feauredproducts'=> $feauredproducts,
            'store'=> $store
            ]);
    }

    public function product($id){
        $producttype = DB::table('categories')->get();
        $store = DB::table('storedetails')->get();
        $feauredproducts = DB::table('products')->take(3)->get();
        $product = products::find($id);
        $allproducts = DB::table('products')->get();
        return view('product_page',[
            'producttype'=>$producttype,
            'feauredproducts'=> $feauredproducts,
            'store'=> $store,
            'allproducts'=> $allproducts,
            'product' => $product
        ]);
    }
    public function search(Request $request) {
        $allproducts = DB::table('products')->get();
        $producttype = DB::table('categories')->get();
        $store = DB::table('storedetails')->get();
        $feauredproducts = DB::table('products')->take(3)->get();
        
        $searchValue = $request->query('search'); // Retrieve search query from request
    
        // Search for products by name in the database
        $searchResults = DB::table('products')->where('productName', 'like', '%' . $searchValue . '%')->get();
    
        return view('search', [
            'producttype' => $producttype,
            'feauredproducts' => $feauredproducts,
            'store' => $store,
            'searchResults' => $searchResults,
            'allproducts' => $allproducts
        ]);
    }
    
    public function auth(){
        $producttype = DB::table('categories')->get();
        $store = DB::table('storedetails')->get();
        return view('auth',[
            'producttype'=>$producttype,
            'store'=> $store
        ]);
    }
    public function cart(){
        $store = DB::table('storedetails')->get();
        $producttype = DB::table('categories')->get();
        return view('cart',[
            'producttype'=>$producttype,
            'store'=> $store
        ]);
    }


    public function redirect(){
        $store = DB::table('storedetails')->get();
        $producttype = DB::table('categories')->get();
        return view('redirect',[
            'producttype'=>$producttype,
            'store'=> $store
        ]);
    }
}
