<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

// READ
    public function home(){
        $product = Product::all();
         return view('products.home',['products'=>$product]);
    
    }

    public function create(){
        
        return view('products.create');
    }
    
    // CREATE
    public function store(Request $request){
         $data = $request->validate([
            'name'=> 'required',
            'qty' => 'required|numeric',
            'price' => 'required|min:0,2'
         ]);

         $newData = Product::create($data);
          return redirect()->route('home.index')->with('created', 'Product created successfully!');
    }

    // EDIT
    public function edit(Product $product){
        return view('products.edit', ['product'=>$product]);
    }

     // UPDATE
     public function update(Request $request, $product){
        $updateData = $request->validate([
            'name'=> 'required',
            'qty' => 'required|numeric',
            'price' => 'required|min:0.2' 
        ]);

        $productToUpdate = Product::findOrFail($product);

        $productToUpdate->update($updateData);

        return redirect()->route('home.index')->with('success', 'Product updated successfully');
    }

   // DELETE
public function delete(Product $product){
    $product->delete();
    return redirect()->route('home.index')->with('deleted', 'Product deleted successfully');
}


}