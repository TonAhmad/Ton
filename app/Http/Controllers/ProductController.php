<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['id' => 1, 'name' => 'Laptop', 'price' => 15000],
            ['id' => 2, 'name' => 'Mouse', 'price' => 500],
        ];
        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        return "Detail produk dengan ID: $id";
    }

}