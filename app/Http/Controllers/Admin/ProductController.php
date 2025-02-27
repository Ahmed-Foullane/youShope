<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductFormRequest;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function create(){
        return view("admin.admin-create-product");
    }

    public function store(ProductFormRequest $request)
    {
       
        Product::create([
            'name' => $request->name,
            'description' => $request->description ?? null, 
            'quantity' => $request->quantity,
            'price' => $request->price,
            'image' => $request->image,
        ]);
        return redirect()->route('create.product')->with('success', 'Product Created Successfully!');
    }

    public function edit(int $id){
       $product = Product::findOrFail($id);
       return view("admin.admin-edit-product", compact("product"));
    }

    public function update(ProductFormRequest $request, int $id){
 
        Product::findOrFail($id)->update([
            'name' => $request->name,
            'description' => $request->description ?? null, 
            'quantity' => $request->quantity,
            'price' => $request->price,
            'image' => $request->image,
        ]);

        return redirect()->back()->with('success', 'Product Updated Successfully!');
    }

    public function delete(int $id){
        Product::findOrFail($id)->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Product Deleted Successfully!');
    }
}
