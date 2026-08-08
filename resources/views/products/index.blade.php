@extends('layout.app')   
@section('content')
 <div class="container">

        <div class="header-text">
            <h1>Latest Products</h1>
            <p style="color:#666;">
                Check out our latest products and deals
            </p>
        </div>


        <div class="posts-grid">
@foreach ($products as $product)   
    
            <div class="card">
                

                <div class="card-body">
                    <h2 class="card-title">
                        {{ $product['name'] }}
                    </h2>

                    <p class="card-text">
                        {{ $product['description'] }}
                    </p>

                    <div class="card-footer">
                        <span>
                            price: <strong>{{ $product['price'] }}</strong>
                        </span>

                        <span  style="background-color: {{ $product['is_available'] ? '#28a745' : '#dc3545' }}; color: #fff; padding: 5px 10px; border-radius: 4px;"   >
                            {{ $product['is_available'] ? 'In Stock' : 'Out of Stock' }}
                        </span>
                        @if($product['image'])
                            <div class="mb-3">
                                <img src="{{ asset('storage/' . $product['image']) }}" alt="{{ $product['name'] }}" class="img-fluid" style="max-width: 100%;">
                            </div>
                        @endif
                    <a href="{{ route('products.show', $product['id']) }}" style="background-color: #007bff; color: #fff; padding: 5px 10px; border-radius: 4px; text-decoration: none;">Details</a>
                    </div>
                </div>
            </div>
@endforeach
        </div>
    
    </div>
@endsection
 

    

    <!-- Main Content -->
   



    



