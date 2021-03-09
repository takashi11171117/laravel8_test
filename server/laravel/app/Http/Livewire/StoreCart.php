<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Livewire\Component;

class StoreCart extends Component
{
    public $product;

    public function storeCart()
    {
        $cart = Cart::firstOrCreate([
            'user_id' => auth()->id(),
            'session_id' => session()->getId()
        ]);

        $cart->products()->syncWithoutDetaching($this->product);
    }

    public function render()
    {
        return view('livewire.store-cart');
    }
}
