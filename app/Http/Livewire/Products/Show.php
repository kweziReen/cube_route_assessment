<?php

namespace App\Http\Livewire\Products;

use Livewire\Component;
use App\Models\Product;

class Show extends Component
{
    public $product;

    public function mount($id)
    {
        $this->product = Product::find($id);
    }

    public function render()
    {
        return view('livewire.products.show')->extends('layouts.app');
    }
}
