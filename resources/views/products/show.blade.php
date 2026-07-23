@extends('layout.app')   
@section('content')


<div class="container my-4">
    <h2>Product Details</h2>
    
    <div class="card mt-3" style="max-width: 500px;">
        <div class="card-body">
            <h3 class="card-title">{{ $product['name'] }}</h3>
            <p class="card-text">{{ $product['description'] }}</p>
            <p class="card-text"><strong>Price:</strong> ${{ number_format($product['price'], 2) }}</p>
            <p class="card-text">
                <strong>Status:</strong> 
                <span style="background-color: {{ $product['is_available'] ? '#28a745' : '#dc3545' }}; color: #fff; padding: 5px 10px; border-radius: 4px;">
                    {{ $product['is_available'] ? 'Available' : 'Out of Stock' }}
                </span>
            </p>
            
            <a href="{{ route('products.index') }}" style="background-color: #6c757d; color: #fff; padding: 5px 10px; border-radius: 4px; text-decoration: none;">Back to Products</a>
        </div>
    </div>
</div>


 @endsection