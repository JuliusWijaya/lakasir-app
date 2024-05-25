<?php

namespace App\Livewire\Items;

use App\Models\Item;
use Livewire\Component;
use App\Models\Category;
use App\Livewire\Forms\PostForm;


class Edit extends Component
{
    public PostForm $form;

    public function mount(Item $item)
    {
        $this->form->setItem($item);
    }

    public function save()
    {
        $this->form->update();

        //flash message
        session()->flash('message', 'Data Berhasil Diupdate.');

        //redirect
        return $this->redirect('/items', navigate: true);
    }

    public function render()
    {
        $categories = Category::pluck("name", "id");

        return view('livewire.items.edit', ['title' => "Testing", 'categories' => $categories])
            ->title('Item ' . $this->form->name_item);
    }
}
