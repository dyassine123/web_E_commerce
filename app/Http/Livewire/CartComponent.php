<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;
use Illuminate\Support\Facades\Auth;

class CartComponent extends Component
{
    public function increaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId, $qty);
        $this->emit('cartUpdated');
    }

    public function decreaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId, $qty);
        $this->emit('cartUpdated');
    }

    public function destroy($rowId)
    {
        Cart::remove($rowId);
        session()->flash('success_message', 'Item has been removed');
        $this->emit('cartUpdated');
    }

    public function destroyAll()
    {
        Cart::destroy();
        $this->emit('cartUpdated');
    }

    public function checkout()
    {
        if (Auth::check()) {
            return redirect()->route('checkout');
        } else {
            return redirect()->route('login');
        }
    }

    public function setAmountForcheckout()
    {
        if(!cart::count() > 0)
        {
           session()->forget('checkout');
           return ;
        }
        session()->put('checkout',[
            'subtotal'=>Cart::subtotal(),
            'tax' =>Cart::tax(),
            'total'=>Cart::total()
        ]);
    }
 


    public function render()
    {
        $this->setAmountForcheckout();
        
        return view('livewire.cart-component')->layout("layouts.base");
    }
}
