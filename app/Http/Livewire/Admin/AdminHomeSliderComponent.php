<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeSlider;
use Livewire\Component;

class AdminHomeSliderComponent extends Component
{

    public function deleteSlider($id)
    {
        $product = HomeSlider::findOrFail($id);
        $product->delete();
        session()->flash('message', 'Slide has been deleted successfully !!');
    }

    public function render()
    {
        $sliders = HomeSlider::all();
        return view('livewire.admin.admin-home-slider-component',['sliders'=>$sliders])->layout('layouts.base');
    }
}
