<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
   
    public function index()
    {
        $categories = Category::paginate(10);

        return view('admin.category.index', compact('categories'));
    }

    
    public function create()
    {
        return view('admin.category.create');
    }

    
    public function store(StoreCategoryRequest $request)
    {
        $imagePath ='';
        if($request->file('image')){
            $imagePath = $request->file('image')->store('images', 'public');
        }

        Category::create([
            'name_uz' => $request->input('name_uz'),
            'name_ru' => $request->input('name_ru'),
            'name_en' => $request->input('name_en'),
            'image' => $imagePath,
        ]);


        return redirect()->route('categories.index')->with('success', 'Kategoriya Yaratildi!');
    }

   
    public function show(Category $category)
    {
        return view('admin.category.show', compact('category'));
    }

  
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

 
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $validated = $request->all();

        if($request->file('image')){
            Storage::delete($category->image);
            $path = $request->file('image')->storeAs('images', 'public');
            $category->image = $path;
        }


         $category->name_uz = $validated['name_uz'];
         $category->name_ru = $validated['name_ru'];
         $category->name_en = $validated['name_en'];
         $category->save();

        return redirect()->route('categories.index')->with('success', 'Kategoriya tahrirlandi!');
    }

    
    public function destroy(Category $category)
    {
        if ($category->image){
            Storage::delete($category->image);
        }

        $category->delete();
        return redirect()->back();
    }
}
