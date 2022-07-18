<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;
use App\Models\Tag;

class BlogController extends Controller
{
    public function blogs(){
        return view('blogs.blogs');
    }

    public function singleBlog($slug){
        $blog = Blog::whereSlug($slug)->first();
        if($blog === null){
            abort(404);
        }

        return view('blogs.single',compact('blog'));
    }
}
