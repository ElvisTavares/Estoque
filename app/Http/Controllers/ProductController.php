<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

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

    public function update(Request $request, $id)
    {
        dd('oi');
        $product = $this->product->find($id);

        if($request->file('image')){
            Storage::disk('public')->delete($product->image);
        }

        $image = $request->file('image');
        $imageUrn = $image->store('image/product', 'public');

        $product->fill($request->all());
        $product->image = $imageUrn;

        $product->save();

        return response()->json(['msg' => 'Product successfully edited'], 201);

    }

    public function destroy($id)
    {
        $product = $this->product->find($id);
        $product->delete();

        return response()->json(['msg' => 'Deleted']);
    }
}
