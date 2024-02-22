<?php

namespace App\Http\Controllers;

use App\Models\person;
use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function home(){
        return view("home");
    }
    public function about(){
        return view("about");
    }
    public function contact(){
        return view("contact");
    }
    public function products(){
        return view("products");
    }
    public function product(){
        return view("product_page");
    }
    public function auth(){
        return view("auth");
    }
    public function cart(){
        return view("cart");
    }
    public function user(){
        return view("user");
    }
    public function admin(){
        return view("admin");
    }
    public function redirect(){
        return view("redirect");
    }
}
