<?php

namespace App\Http\Livewire\User;

use App\Models\Product;
use Livewire\Component;

class ViewProduct extends Component
{
    public $prod_id;
    public function mount($id)
    {
        $this->prod_id = $id;
    }
    public function render()
    {
        $product = Product::where('id', $this->prod_id)->first();
        $related = Product::where('category_id', $product->category_id)->inRandomOrder()->limit(5)->get();

        return view('livewire.user.view-product', ['prod' => $product, 'related' => $related])->layout('layouts.base');
    }
}
