<?php

namespace App\Http\Controllers;

use App\Models\Prudect;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getProducts()
    {
        return [
            ['id' => 1, 'name' => 'Iphone 12', 'description' => '256GB, Midnight Blue', 'price' => 799.00, 'is_available' => true],
            ['id' => 2, 'name' => 'Iphone 13', 'description' => '512GB, Starlight', 'price' => 899.00, 'is_available' => false],
            ['id' => 3, 'name' => 'Iphone 14', 'description' => '1TB, Product Red', 'price' => 999.00, 'is_available' => true],
        ];
        
    }

    public function index()
    {
        $products = $this->getProducts();

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $products = $this->getProducts();
        $product = collect($products)->firstWhere('id', $id);
        if (!$product) {
            abort(404);
        }
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
