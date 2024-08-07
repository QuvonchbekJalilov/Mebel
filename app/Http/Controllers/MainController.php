<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
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
        $brands = Brand::all();
        $products = Product::where('best_seller', 'on')->get();
        $news = Blog::all();
        return view('pages.index', compact('locale', 'brands', 'products', 'news'));
    }

    public function about()
    {
        $brands = Brand::all();
        $locale = $this->language();
        return view('pages.about', compact('locale', 'brands'));
    }

    public function contact()
    {
        $contacts = Contact::all();
        $locale = $this->language();
        return view('pages.contact', compact('locale', 'contacts'));
    }

    public function shop()
    {
        $locale = $this->language();
        $products = Product::where('stock', '>', 0)->paginate(10);
        $categories = Product::selectRaw('category_id, COUNT(*) as count')
            ->groupBy('category_id')
            ->get();
        return view('pages.shop', compact('locale', 'products', 'categories'));
    }

    public function shop_details($id)
    {
        $locale = $this->language();
        $product = Product::findOrFail($id);
        $relatedProducts = Product::where('category_id', $product->category_id)->paginate(15);
        return view('pages.shop-details', compact('locale', 'product', 'relatedProducts'));
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
        $categories = Product::selectRaw('category_id, COUNT(*) as count')
            ->groupBy('category_id')
            ->get();
        return view('pages.blog-details', compact('locale', 'blog', 'categories'));
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