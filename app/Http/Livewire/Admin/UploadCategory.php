<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;


class UploadCategory extends Component
{
    public $name;
    public $slug;

    public function gen()
    {
        $this->slug = Str::slug($this->name);
    }
    public function cat()
    {
        $category = new Category();
        $category->name = $this->name;
        $category->slug = $this->slug;
        $category->save();
        $this->name = '';
        $this->slug = '';
        session()->flash('message', 'Category created successfully');
    }
    public function render()
    {
        return view('livewire.admin.upload-category')->layout('layouts.base');
    }
}
