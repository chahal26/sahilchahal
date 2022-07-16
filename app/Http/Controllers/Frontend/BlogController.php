<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Tag;

class BlogController extends Controller
{
    public function blogs(){
        $categories = Category::get();
        $tags = Tag::get();

        return view('blogs.blogs',compact('categories','tags'));
    }
}
