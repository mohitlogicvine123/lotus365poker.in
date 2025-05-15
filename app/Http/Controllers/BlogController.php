<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blog.blog-list',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //  dd($request->all());

          $request->validate([
            'title' => 'required',
            // 'image' => 'required',
            'url' => 'required',

        ]);

        $insert=[
            'title' => $request->title,
            'url' => $request->url,
            'description' => $request->description,
            'metadescription' => $request->metadescription,
            'imagealt' => $request->imagealt,
            'author' => $request->author,
            'category' => $request->category,
            'metakey' => $request->metakey,
            'metatital' => $request->metatital,
            'image'=>$request->image
        ];

          $img = Blog::create($insert);

            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $img->addMediaFromRequest('image')->toMediaCollection('image');
            } else {
                return response()->json(['error' => 'Image upload failed'], 400);
            }


      return redirect()->route('blog.index')->with('success', 'Blog created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
     $blogs = Blog::findOrFail($id);
    return view('admin.blog.show', compact('blogs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $blog = Blog::findOrFail($id);
    return view('admin.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $blog = Blog::findOrFail($id);

$update = [
    'title' => $request->title,
    'url' => $request->url,
    'description' => $request->description,
    'metadescription' => $request->metadescription,
    'imagealt' => $request->imagealt,
    'author' => $request->author,
    'category' => $request->category,
    'metakey' => $request->metakey,
    'metatital' => $request->metatital,
];

$blog->update($update);


if ($request->hasFile('image') && $request->file('image')->isValid()) {
    $blog->clearMediaCollection('image');
    $blog->addMediaFromRequest('image')->toMediaCollection('image');
}


          return redirect()->route('blog.index')->with('success', 'User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::findOrFail($id);
       $blog->delete();
      return redirect()->route('blog.index')->with('success', 'User deleted successfully.');
    }
}
