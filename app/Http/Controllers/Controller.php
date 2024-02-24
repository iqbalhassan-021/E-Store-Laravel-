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
        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function products(){
        return view('products');
    }
    public function product(){
        return view('product_page');
    }
    public function auth(){
        return view('auth');
    }
    public function cart(){
        return view('cart');
    }
    public function user(){
        return view('user');
    }
    public function admin() {
        $srnum = 1;
        // Retrieve data from the database
        $products = DB::table('products')->get();
    
        // Get the row count
        $products_count = $products->count();
        
        // Pass variables to the view using compact()
        return view('admin', [
            'srnum' => $srnum,
            'products' => $products,
            'products_count' => $products_count
        ]);
    }
    public function redirect(){
        return view('redirect');
    }
}
