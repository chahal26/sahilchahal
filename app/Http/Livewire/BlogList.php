<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;

class BlogList extends Component
{
    public $blogs = [] ;

    public function render()
    {
        $this->blogs = Blog::get();

        return view('livewire.blog-list',['blogs' => $this->blogs]);
    }
}
