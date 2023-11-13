<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class HeaderSearchComponent extends Component
{
    public $search;
    public $product_cat;
    public $product_cat_id;

    public function mount()
    {
        $this->product_cat = 'ALL Category';
        $this->fill(request()->only('search', 'product_cat', 'product_cat_id'));
    }

    public function render()
    {
        $categories = Category::all(); // Change variable name to lowercase 'categories'
        return view('livewire.header-search-component', ['categories' => $categories]); // Correct variable name to 'categories'
    }
}
