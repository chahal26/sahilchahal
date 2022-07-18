<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;

class BlogTab extends Component
{
    public Blog $blog ;

    public function render()
    {
        return view('livewire.blog-tab',['blog' => $this->blog]);
    }
}
