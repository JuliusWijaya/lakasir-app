<?php

namespace App\Livewire\Items;

use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\Title;
use App\Livewire\Forms\PostForm;

#[Title('Create Item')]
class Create extends Component
{
    public PostForm $form;

    public function save()
    {
        $this->form->store();

        //redirect
        return $this->redirect('/items', navigate: true);
    }

    public function render()
    {
        $title = "Create Item";
        $categories = Category::pluck("name", "id");

        return view('livewire.items.create', compact('title', 'categories'));
    }
}
