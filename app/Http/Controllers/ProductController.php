<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;


class ProductController extends Controller
{

    public function __construct(Products $product)
    {
        $this->product = $product;
    }

    public function index()
    {
        $id = 1;
        $product = $this->product->find($id);
       
        $array = [
            'nome' => $product->name,
            'Preco' => $product->salePrice
        ];

        return response()->json($array);
    }
}
