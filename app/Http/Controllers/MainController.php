<?php

namespace App\Http\Controllers;

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
        $contacts = Contact::all();
        $locale = $this->language();
        return view('pages.contact', compact('locale', 'contacts'));
    }

    public function shop(){
        return view('pages.shop');
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

    public function blogDetails($id)
    {
        $locale = $this->language(); // Agar bu metod mavjud bo'lsa
        $blog = Blog::findOrFail($id); // `Blog` modelidan blogni ID bo'yicha topamiz

        return view('pages.blog-details', compact('locale', 'blog'));
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