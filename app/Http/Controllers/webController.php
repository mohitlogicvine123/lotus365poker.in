<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class webController extends Controller
{
    public function index() {
        $blogs = Blog::all();
        return view('lotus-blog', compact('blogs'));
    }

     public function blogDetail($title) {
        $blog = Blog::where('title',$title)->firstorfail(); // Find the blog by ID, or throw a 404 error
        return view('blog-detail', compact('blog')); // Pass blog to the view
    }
    
}

