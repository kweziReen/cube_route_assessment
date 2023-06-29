<?php

namespace App\Http\Livewire\Component;

use Livewire\Component;
use App\Models\Category;

class Navigation extends Component
{
    public function render()
    {
        $categories = Category::orderBy('name', 'asc')->get();

        return view('livewire.component.navigation', [
            'categories' => $categories,
        ]);
    }
}
