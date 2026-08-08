@extends('dashlayout.app')   
@section('contentdash')
<div class="w3-row-padding w3-stretch">
          <div class="w3-col l12">
            <div class="w3-white w3-round w3-margin-bottom w3-border" style="">
              <header class="w3-padding-large w3-large w3-border-bottom" style="font-weight: 500">Product List</header>
              <div class="w3-padding-large">
                <table class="w3-table w3-card w3-striped w3-bordered">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Availability</th>
                    <th scope="col">Actions</th>
                  </tr>
                  @foreach ($products as $product)   
                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td> {{ $product['name'] }}</td>
                    <td> {{ $product['description'] }}</td>
                    <td>{{ $product['price'] }}</td>

                    <td style="background-color: {{ $product['is_available'] ? '#28a745' : '#dc3545' }}; color: #fff; padding: 5px 10px; border-radius: 4px;">{{ $product['is_available'] ? 'In Stock' : 'Out of Stock' }} </td>
                    @if($product['image'])
                      <td>
                        <img src="{{ asset('storage/' . $product['image']) }}" alt="{{ $product['name'] }}" class="img-fluid" style="max-width: 100px;">
                      </td>
                    @else
                      <td>No Image</td>
                    @endif
                    <td style="white-space: nowrap;">
                        <div style="display: flex; align-items: center; gap: 5px;">
                        <a href="{{ route('products.show', $product['id']) }}" class="w3-button w3-round w3-border">Details</a>
                      
                      <a href="{{ route('products.edit', $product['id']) }}" class="w3-button w3-round w3-border">Edit</a>
                     
                      <form action="{{ route('products.destroy', $product['id']) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="w3-button w3-round w3-border">Delete</button>
                      </form>
                      </div>
                      </td>
                  </tr>
                  @endforeach
               
                </table>
              </div>
            </div>
          </div>
        </div>
        @endsection