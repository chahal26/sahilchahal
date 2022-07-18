<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Tag;

class Sidebar extends Component
{
    public $categories,$tags;

    public function mount()
    {
        $this->categories = Category::get();
        $this->tags = Tag::get();
    }

    public function render()
    {
        return view('livewire.sidebar',[
            'categories' => $this->categories,
            'tags' => $this->tags,
        ]);
    }
}
