<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Product;


use Illuminate\Http\Request;

class ProductController extends Controller
{
    use AuthorizesRequests;
    
    /**
     * Display a listing of the resource.
     */
    // public function getProducts()
    // {
    //     return [
    //         ['id' => 1, 'name' => 'Iphone 12', 'description' => '256GB, Midnight Blue', 'price' => 799.00, 'is_available' => true],
    //         ['id' => 2, 'name' => 'Iphone 13', 'description' => '512GB, Starlight', 'price' => 899.00, 'is_available' => false],
    //         ['id' => 3, 'name' => 'Iphone 14', 'description' => '1TB, Product Red', 'price' => 999.00, 'is_available' => true],
    //     ];
        
    // }

    public function list()
    {
        $products = Product::all();
        return view('products.list', compact('products'));
    }

    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    //    $this->authorize('create', Product::class);
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
       $this->authorize('create', $product);
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'is_available' => 'required|boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('images', 'public'); // Store the image in the 'public/articles' directory
        } else {
            $image= null; // No image provided
        }
        $this->authorize('create', $product);
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'is_available' => $request->is_available,
            'image' => $image,
            'user_id' => auth()->id(),
        ]);
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        
        $product = Product::findOrFail($id);
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
       $this->authorize('update', $product);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'is_available' => 'required|boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $this->authorize('update', $product);
         if ($request->hasFile('image')) {
        if($product->image) {
        // Delete the old image if it exists and a new image is uploaded
        \Storage::disk('public')->delete($product->image);
        }
    $data['image'] = $request->file('image')->store('images', 'public');
    }
        $product->update($data);
        return redirect()->route('products.index')
        ->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
        $this->authorize('delete', $product);
          if ($product->image) {
            // Delete the image file from storage if it exists
            \Storage::disk('public')->delete($product->image);
        }
        $product->delete();
        return redirect()->route('products.index')
        ->with('success', 'Product deleted successfully.');
    }
}
