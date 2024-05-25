<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\Item;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Session;

class PostForm extends Form
{
    //id
    public $itemId;

    //kode_item
    #[Rule('required', message: 'Masukkan kode barang')]
    public $kode_item = '';

    //name_item
    #[Rule('required', message: 'Masukkan nama barang')]
    public $name_item = '';

    //category_id
    #[Rule('required', message: 'Masukan category barang')]
    public $category_id = '';

    //qty
    #[Rule('required', message: 'Masukan qty barang')]
    #[Rule('integer', message: 'Qty barang harus angka')]
    public $qty = '';

    //unit
    #[Rule('required', message: 'Masukan unit barang barang')]
    public $unit = '';

    //price
    #[Rule('required', message: 'Masukan harga barang barang')]
    public $price = '';

    public function setItem(Item $item)
    {
        // //assign
        $this->itemId = $item->id;
        $this->kode_item = $item->kode_item;
        $this->name_item = $item->name_item;
        $this->category_id = $item->category_id;
        $this->qty   = $item->qty;
        $this->unit  = $item->unit;
        $this->price = $item->price;
    }

    public function store()
    {
        $validate = $this->validate();

        // Create item
        Item::create($validate);

        //flash message
        Session::flash('message', 'Data berhasil disimpan!');
        Session::flash('alert-class', 'alert-success');
    }

    public function update()
    {
        $validate = $this->validate();
        // get Item
        $item = Item::find($this->itemId);

        $item->update($validate);
    }
}
