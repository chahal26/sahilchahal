<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class Categories extends Component
{
    public $categories = [] ;

    public function render()
    {
        $this->categories = Category::get();
        return view('livewire.categories',['categories' => $this->categories]);
    }
}
