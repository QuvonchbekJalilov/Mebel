<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class MainController extends Controller
{
    protected function language()
    {
        return app()->getLocale(); // Hozirgi tilni olish
    }

    public function index()
    {
        $locale = $this->language();
        return view('pages.index', compact('locale'));
    }

    public function about()
    {
        $locale = $this->language();
        return view('pages.about', compact('locale'));
    }

    public function contact()
    {
        $locale = $this->language();
        return view('pages.contact', compact('locale'));
    }

    public function shop()
    {
        $locale = $this->language();
        return view('pages.shop', compact('locale'));
    }

    public function shop_details()
    {
        $locale = $this->language();
        return view('pages.shop-details', compact('locale'));
    }

    public function blog()
    {
        $blogs = Blog::paginate(8);
        $locale = $this->language(); // Hozirgi tilni olish
        return view('pages.blog', compact('blogs', 'locale'));
    }

    public function blog_details()
    {
        $locale = $this->language();
        return view('pages.blog-details', compact('locale'));
    }

    public function create()
    {
        $locale = $this->language();
        return view('category.create', compact('locale'));
    }

    public function cart()
    {
        $locale = $this->language();
        return view('pages.cart', compact('locale'));
    }
}