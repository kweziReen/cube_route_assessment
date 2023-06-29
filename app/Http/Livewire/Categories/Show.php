<?php

namespace App\Http\Livewire\Categories;

use Livewire\Component;
use App\Models\Category;

class Show extends Component
{
    public $category;

    public function mount($id)
    {
        $this->category = Category::find($id);
    }
    public function render()
    {
        return view('livewire.categories.show')->extends('layouts.app');
    }
}
