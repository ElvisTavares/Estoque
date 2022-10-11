<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function index()
    {

        $product = $this->product->get();
       // $id = 1;
      //  $product = $this->product->find($id);
       
     //   $array = [
   ///         'nome' => $product->name,
    //        'Preco' => $product->salePrice
    //    ];

        return response()->json($product);
    }

    public function store(Request $request)
    {
      $image = $request->file('image');
      $imageUrn = $image->store('image/product', 'public');
    
      $product = $this->product->create([
        'name' => $request->name,
        'description' => $request->description,
        'image' => $imageUrn,
        'purchasePrice' => $request->purchasePrice,
        'salePrice' => $request->salePrice,
        'quantity' => $request->quantity,
      ]);

      return response()->json($product, 201);

    }
}
