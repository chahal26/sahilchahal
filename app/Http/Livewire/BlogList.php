<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;
use Livewire\WithPagination;

class BlogList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $blogs = Blog::paginate(10);

        return view('livewire.blog-list',['blogs' => $blogs]);
    }
}
