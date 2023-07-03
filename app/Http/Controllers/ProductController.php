<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:3',
            'price' => 'required|numeric',
            'weight' => 'required|numeric'
        ]);

        $product = new Product($validated);
        $product->save();
        
        return redirect()->route('product.index')->with('success', 'Produto cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
        // dd($product);
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        // Referencia para quando mudar os () da parte de cima
        // $product = Product::find($id);
        // dd($product);
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:3',
            'price' => 'required|numeric',
            'weight' => 'required|numeric'
        ]);
        
        $product = Product::findOrFail($id);
        $product->update($validated);
        // dd($product);
            
        return redirect()->route('product.show', compact('product'))->with('success', 'Produto atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        // dd($id);
        return redirect()->route('product.index', compact('product'))->with('warning', 'Produto excluído com sucesso!');
    }
}
