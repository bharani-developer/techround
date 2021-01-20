<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product'=>'required',
            'category'=>'required',
            'stock'=>'required',
            'price'=>'required'
        ]);
        $products = new Product([
            'product' => $request->get('product'),
            'category' => $request->get('category'),
            'stock' => $request->get('stock'),
            'price' => $request->get('price')
        ]);
        $products->save();
        return redirect('/products')->with('success', 'Contact saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'product'=>'required',
            'category'=>'required',
            'stock'=>'required',
            'price'=>'required'
            
        ]);
        $product = Product::find($id);
        $product->product =  $request->get('product');
        $product->category = $request->get('category');
        $product->stock = $request->get('stock');
        $product->price = $request->get('price');
        $product->save();
        return redirect('/products')->with('success', 'Product updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/products')->with('success', 'product deleted!');
    }
}
