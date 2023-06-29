<?php

namespace App\Http\Livewire\Categories;

use Livewire\Component;
use App\Models\Category;

class Index extends Component
{
    public $title, $cur_id, $name, $meta_title, $meta_description, $meta_keywords;
    public $cur_view;

    public function mount(){
        $this->cur_view = "list";
        $this->getData();
    }

    public function showForm($id = null){
        $this->cur_view = "form";
        if($id){
            $this->cur_id = $id;
            $this->getData();
        }
    }

    public function cancelForm(){
        $this->cur_view = "list";
        $this->getData();
        $this->clearFields();
    }

    public function getData(){
        if($this->cur_id){
            $this->title = "Edit Category";
            $category = Category::find($this->cur_id);
            $this->name = $category->name;
            $this->meta_title = $category->meta_title;
            $this->meta_description = $category->meta_description;
            $this->meta_keywords = $category->meta_keywords;
        }else{
            $this->title = "Add Category";
        }
    }

    public function saveCategory(){
        $this->validate([
            'name' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'nullable',
            'meta_keywords' => 'nullable',
        ]);

        if($this->cur_id){
            $category = Category::where('id', $this->cur_id)->first();    
        }
        else{
            $category = new Category();
        }

        $category->name = $this->name;
        $category->meta_title = $this->meta_title;
        $category->meta_description = $this->meta_description;
        $category->meta_keywords = $this->meta_keywords;
        $category->save();
        session()->flash('message', 'Successfully updated.');
        $this->clearFields();
    }

    public function deleteCategory($id){
        Category::where('id', $id)->delete();
        session()->flash('message', 'Successfully deleted.');
    }

    public function clearFields(){
        $this->cur_view = "list";
        $this->cur_id = null;
        $this->name = null;
        $this->meta_title = null;
        $this->meta_description = null;
        $this->meta_keywords = null;
    }

    public function render(){
        $categories = Category::orderBy('name', 'asc')->get();
        return view('livewire.categories.index')
        ->with([
            'categories' => $categories,
        ])
        ->extends('layouts.app');
    }
}
