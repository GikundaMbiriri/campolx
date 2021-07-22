<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Category;

use Livewire\WithPagination;

use Livewire\Component;

class SortComponent extends Component
{
    public $cat_id;
    public function mount($id)
    {
        $this->cat_id = $id;
    }
    use WithPagination;
    public function render()
    {


        $products = Product::where('category_id', 'LIKE', $this->cat_id)->get();

        $categories = Category::all();


        return view('livewire.sort-component', ['products' => $products, 'categories' => $categories])->layout('layouts.base');
    }
}
