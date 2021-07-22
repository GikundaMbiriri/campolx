<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use App\Models\Category;

use Livewire\WithPagination;

use Livewire\Component;

class ShopComponent extends Component
{
    public $sorting;
    public $pageSize;
    public $term;
    public $cate;

    public function mount()
    {
        $this->sorting = "default";
        $this->pageSize = 12;
    }
    use WithPagination;
    public function render()
    {

        if ($this->sorting == "date") {
            $products = Product::where('name', 'LIKE', $this->term)->orWhere('description', 'LIKE', $this->term)->orderBy('created_at', 'DESC')->paginate($this->pageSize);
        } else if ($this->sorting == "price") {
            $products = Product::where('name', 'LIKE', $this->term)->orWhere('description', 'LIKE', $this->term)->orderBy('regular_price', 'ASC')->paginate($this->pageSize);
        } else if ($this->sorting == "price-desc") {
            $products = Product::where('name', 'LIKE', $this->term)->orWhere('description', 'LIKE', $this->term)->orderBy('regular_price', 'DESC')->paginate($this->pageSize);
        } else {
            $products = Product::where('name', 'LIKE', $this->term)->orWhere('description', 'LIKE', $this->term)->paginate($this->pageSize);
        }
        $categories = Category::all();


        return view('livewire.admin.shop-component', ['products' => $products, 'categories' => $categories])->layout('layouts.base');
    }
}
