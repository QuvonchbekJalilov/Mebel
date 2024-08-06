<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function about(){
        return view('pages.about');
    }
    public function contact(){
        return view('pages.contact');
    }

    public function shop(){
        $products = Product::paginate(20);
        return view('pages.shop', compact('products'));
    }
    public function shop_details(){
        return view('pages.shop-details');
    }
    public function blog(){
        return view('pages.blog');
    }
    public function blog_details(){
        return view('pages.blog-details');
    }
    public function create(){
        return view('category.create');
    }

    public function cart(){
        return view('pages.cart');
    }
}


