<?php

namespace App\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $categories = Category::latest()->get();

        return view('livewire.categories.index', [
            'categories' => $categories,
        ]);
    }
}
