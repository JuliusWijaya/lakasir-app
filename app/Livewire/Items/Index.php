<?php

namespace App\Livewire\Items;

use App\Models\Item;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;

#[Title('Item')]
class Index extends Component
{
    public function destroy($id)
    {
        //destroy
        Item::destroy($id);

        //flash message
        session()->flash('message', 'Data Berhasil Dihapus.');

        //redirect
        return back();
    }

    public function render()
    {
        return view('livewire.items.index', [
            'title' => "Item",
            'items' => Item::latest()->get(),
        ]);
    }
}
