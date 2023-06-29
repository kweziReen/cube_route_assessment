<?php

namespace App\Http\Livewire;

use Auth;
use Livewire\Component;
use App\Models\Product;
use App\Models\Variant;
use App\Models\Category;

class Home extends Component
{
    public function render()
    {
        $categories = Category::orderBy('name', 'asc')->take(3)->get();
        $products = Product::orderBy('name','asc')->take(9)->get();

        return view('livewire.home')
        ->with([
            'categories' => $categories,
            'products' => $products,
        ])
        ->extends('layouts.app');
    }
}
