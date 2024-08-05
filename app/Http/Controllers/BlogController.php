<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    
    public function index()
    {
        $blogs = Blog::paginate(20);
        return view('admin.blog.index', compact('blogs'));
    }

   
    public function create()
    {
        return view('admin.blog.create');
    }

   
    public function store(StoreBlogRequest $request)
    {
        if($request->image){
            $imagePath = $request->file('image')->store('images', 'public');
        }

        Blog::create([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'description_en' => $request->description_en,
            'image' => $imagePath
        ]);

        return redirect()->route('blogs.index')->with('success', 'blog saved successfully');
    }

    
    public function show(Blog $blog)
    {
        return view('admin.blog.show', compact('blog'));
    }

    
    public function edit(Blog $blog)
    {
        return view('admin.blog.edit', compact('blog'));
    }

    
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        if($request->file('image')){
            Storage::delete($blog->image);
            $path = $request->file('image')->storeAs('images', 'public');
            $blog->image = $path;
        }

        $blog->title_uz = $request['title_uz'];
        $blog->title_ru = $request['title_ru'];
        $blog->title_en = $request['title_en'];
        $blog->description_uz = $request['description_uz'];
        $blog->description_ru = $request['description_ru'];
        $blog->description_en = $request['description_en'];
        $blog->save();

        return redirect()->route('blogs.index')->with('success', 'blog updated successfully');
    }

    
    public function destroy(Blog $blog)
    {
        if ($blog->image){
            Storage::delete($blog->image);
        }

        $blog->delete();
        return redirect()->back();
    }
}
