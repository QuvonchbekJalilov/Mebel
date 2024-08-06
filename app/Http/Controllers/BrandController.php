<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{

    public function index()
    {
        $brands = Brand::paginate(10);
        return view('admin.brand.index', compact('brands'));
    }


    public function create()
    {
        return view('admin.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->file('image')) {
            $path = $request->file('image')->store('images', 'public');
        }

        Brand::create([
            'name' => $request->name,
            'image' => $path
        ]);

        return redirect()->route('brands.index')->with('success', 'Successfully created a brand');
    }


    public function show(Brand $brand)
    {
        return view('admin.brand.show', compact('brand'));
    }


    public function edit(Brand $brand)
    {
        return view('admin.brand.edit', compact('brand'));
    }


    public function update(Request $request, Brand $brand)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($brand->image) {
                Storage::disk('public')->delete($brand->image);
            }

            $path = $request->file('image')->store('images', 'public');
        } else {
            $path = $brand->image;
        }

        $brand->update([
            'name' => $request->input('name'),
            'image' => $path,
        ]);
        return redirect()->route('brands.index')->with('success', 'Successfully updated');
    }



    public function destroy(Brand $brand)
    {
        if($brand->image) {
            Storage::disk('public')->delete($brand->image);
        }

        $brand->delete();

        return redirect()->back();
    }
}
