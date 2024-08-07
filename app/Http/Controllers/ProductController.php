<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::paginate(10);

        return view('admin.product.index', compact('products'));
    }


    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }


    public function store(StoreProductRequest $request)
    {
        if ($request->file('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        Product::create([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'description_en' => $request->description_en,
            'image' => $imagePath,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'best_seller' => $request->best_seller ?? "off" ,
            'stock' => $request->stock
        ]);

        return redirect()->route('products.index');
    }


    public function show(Product $product)
    {
        return view('admin.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.product.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        if ($request->file('image')){
            Storage::delete($product->image);
            $imagePath = $request->file('image')->store('images', 'public');

        }

        $product->update([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'description_en' => $request->description_en,
            'image' => $imagePath ?? $product->image,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'best_seller' => $request->best_seller ?? "off",
            'stock' => $request->stock
        ]);


        return redirect()->route('products.index')->with('success', 'product information updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if ($product->image) {
            Storage::delete($product->image);
        }

        $product->delete();
        return redirect()->back()->with('success', 'Product deleted successfully');
    }
}
