<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    private $product;

    public function __construct(Product $product){

        $this->product = $product;

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = $this->product->paginate(10);
        
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $stores = \App\Models\Store::all(['id', 'name']);

        return view('admin.products.create', compact('stores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $store = \App\Models\Store::find($data['store']);
        $store->products()->create($data);

        flash('Produto criado com sucesso!')->success();

        return redirect()->route('admin.products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($product)
    {
        $product = $this->product->find($product);

        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $product)
    {
        $data = $request->all();

        $product = $this->product->find($product);
        $product->update($data);

        flash('Produto atualizado com sucesso!')->success();
        return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($product)
    {
        $product = $this->product->find($product);
        $product->delete();
        
        flash('Produto removido com sucesso!')->success();
        return redirect()->route('admin.products.index');
    }
}
