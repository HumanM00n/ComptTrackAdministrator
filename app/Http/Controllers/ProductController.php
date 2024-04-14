<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // INDEX PAGE
    public function index()
    {
        $product = Product::orderBy('created_at', 'DESC')->get();

        return view('products.index', compact('product'));
    }

    // FUNCTION CREATE
    public function create()
    {
        return view('products.create');
    }

    // FUNCTION CREATE
    public function store(Request $request)
    {
        Product::create($request->all());

        return redirect()->route('products')->with('success', 'Produit ajouté avec succès');
    }

    public function show(string $id)
    {
        $product = Product::findOrFail($id);

        return view('products.show', compact('product'));
    }

    // FUNCTION MODIFY
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);

        return view('products.edit' , compact('product'));
    }

    // FUNCTION UPDATE  
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);

        $product->update($request->all());

        return redirect()->route('products')->with('success', 'Le produit a été mis à jour avec succès');
    }

    // FUNCTION DELETE
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect()->route('products')->with('success', 'Le produit a été supprimé avec succès');
    }
}
