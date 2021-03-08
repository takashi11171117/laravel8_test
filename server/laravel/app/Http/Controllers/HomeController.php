<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $products = Product::get();

        return view('home', [
            'products' => $products
        ]);
    }
}
