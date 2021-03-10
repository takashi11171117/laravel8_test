<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Livewire\Component;

class DestroyCart extends Component
{
    public $product;

    protected $listeners = [
        'refresh' => '$refresh'
    ];

    public function destroyCart()
    {
        Cart::bySession()->first()->products()->detach($this->product);

        $this->emitSelf('refresh');
    }

    public function render()
    {
        return view('livewire.destroy-cart');
    }
}
