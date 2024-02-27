<?php

namespace App\Http\Controllers;

use App\Models\person;
use GuzzleHttp\Psr7\Request;
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
        return view('home',[
            'producttype'=>$producttype,
            'slider'=>$slider,
            'store'=> $store
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
        return view('products',[
            'producttype'=>$producttype,
            'store'=> $store
            ]);
    }
    public function product(){
        $producttype = DB::table('categories')->get();
        $store = DB::table('storedetails')->get();
        return view('product_page',[
            'producttype'=>$producttype,
            'store'=> $store
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
    public function user(){
        $store = DB::table('storedetails')->get();
        $producttype = DB::table('categories')->get();
        return view('user',[
            'producttype'=>$producttype,
            'store'=> $store
        ]);
    }
    public function admin() {
        $srnum = 1;
        // Retrieve data from the database
        $products = DB::table('products')->get();
        $categories = DB::table('categories')->get();
        $slider = DB::table('slider')->get();
        $users = DB::table('person')->get();
        $storedetails = DB::table('storedetails')->get();
        $producttype = DB::table('categories')->get();
        // Get the row count
        $products_count = $products->count();
        $categories_count = $categories->count();
        $user_count = $users->count();
        // Pass variables to the view using compact()
        return view('admin', [
            'srnum' => $srnum,
            'products' => $products,
            'categories' => $categories,
            'products_count' => $products_count,
            'categories_count' => $categories_count,
            'users' => $users,
            'user_count' => $user_count,
            'slider' => $slider,
            'storedetails' => $storedetails,
            'producttype'=>$producttype
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
