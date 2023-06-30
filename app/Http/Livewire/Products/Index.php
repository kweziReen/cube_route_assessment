<?php

namespace App\Http\Livewire\Products;

use Livewire\Component;
use App\Models\Product;
use App\Models\Variant;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Index extends Component
{

    use WithPagination;
    
    public $title, $cur_id, $name, $slug, $sap_product_code, $web_product_code, $v_name;
    public $cur_view, $variants = [];
    public $categories = [], $categories_select;
    public $filter, $selected = [];

    public function mount(){
        $this->cur_view = "list";
        $this->getData();
        $this->categories_select = Category::orderBy('name', 'asc')->get();
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
        return redirect()->to('/products');
    }

    public function addVariant(){
        $arr = [
            'v_name' => '',
            'sap_product_code' => '',
            'web_product_code' => ''
        ];
        $this->variants[] = $arr;
    }

    public function getData(){
        if($this->cur_id){
            $this->title = "Edit Product";
            $product = Product::find($this->cur_id);
            if($product){
                $this->name = $product->name;
                $this->slug = $product->slug;
                if($product->variants()){
                    $this->variants = [];
                    foreach($product->variants AS $variant){
                        $arr = [
                            'id' => $variant->id,
                            'v_name' => $variant->name,
                            'sap_product_code' => $variant->sap_product_code,
                            'web_product_code' => $variant->web_product_code,
                        ];
                        $this->variants[] = $arr;
                    }
                }

                if($product->categories()){
                    foreach($product->categories as $category){
                        $arr = [
                            'id' => $category->id,
                        ];
                        $this->selected[] = $arr;
                    }
                }
            }
        }else{
            $this->title = "Add Product";
        }
    }

    public function saveProduct(){
        $this->validate([
            'name' => 'required',
        ]);

        if($this->cur_id){
            $product = Product::find($this->cur_id);

            $this->slug = Str::slug($this->name);
            $product->name = $this->name;
            $product->slug = $this->slug;
            $product->save();

            $categoryIds = $this->categories;
            $product->categories()->sync($categoryIds);
        }
        else{
            $product = new Product();
            $this->slug = Str::slug($this->name);
            $product->name = $this->name;
            $product->slug = $this->slug;
            $product->save();

            $categoryIds = $this->categories;
            $product->categories()->attach($categoryIds);
        }


        foreach($this->variants AS $variant){
            if(isset($variant['id'])){
                $var = Variant::find($variant['id']);
                $var->product_id = $product->id;
                $var->name = $variant['v_name'];
                $var->sap_product_code = $variant['sap_product_code'];
                $var->web_product_code = $variant['web_product_code'];
                $var->update();
            }
            else{
                $var = new Variant();
                $var->product_id = $product->id;
                $var->name = $variant['v_name'];
                $var->sap_product_code = $variant['sap_product_code'];
                $var->web_product_code = $variant['web_product_code'];
                $var->save();
            }

        }

        session()->flash('message', 'Successfully saved.');
        $this->clearFields();
        return redirect()->to('/products');
    }

    public function deleteProduct($id){
        $variants = Variant::where('product_id', $id)->get();

        foreach($variants as $var){
            $var->delete();
        }

        $product = Product::find($id);
        if($product){
            $product->categories()->detach();
            $product->delete();
        }
        session()->flash('message', 'Product successfully deleted.');
        return redirect()->to('/products');
    }

    public function deleteVariant($id){
        Variant::where('id', $id)->delete();
        $this->getData();
    }

    public function clearFields(){
        $this->cur_view = "list";
        $this->cur_id = null;
        $this->name = null;
        $this->v_name = null;
        $this->sap_product_code = null;
        $this->web_product_code = null;
        $this->getData();
    }

    public function render()
    {
        $query = Product::query();

        if ($this->filter) {
            $query->whereHas('categories', function ($query) {
                $query->where('id', $this->filter);
            });

            $products = $query->orderBy('name', 'asc')->paginate(30);
            
        }else{
            $products = Product::orderBy('name', 'asc')->paginate(30);
        }
        
        return view('livewire.products.index')
        ->with([
            'products' => $products,
        ])
        ->extends('layouts.app');
    }
}
