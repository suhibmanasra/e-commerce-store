@extends('dashlayout.app')   
@section('contentdash')
<div class="w3-white w3-round w3-margin-bottom w3-border" style="">
          <header class="w3-padding-large w3-large w3-border-bottom" style="font-weight: 500">Edit Product</header>
          <div class="w3-padding-large">
            <form action="{{ route('products.update', $product->id) }}" method="POST">
                @csrf
                @method('PUT')
              <div class="w3-row w3-margin-bottom">
                <label for="input-1" class="w3-col l2">Name</label>
                <div class="w3-col l10">
                  <input type="text" name="name" class="w3-input w3-border w3-round" placeholder="Enter Product Name" value="{{ $product->name }}">
                  @error('name')
                    <span class="w3-text-red">{{ $message }}</span>
                  @enderror
                </div>
              </div>
              <div class="w3-row w3-margin-bottom">
                <label for="input-1" class="w3-col l2">Description</label>
                <div class="w3-col l10">
                  <input type="text" name="description" class="w3-input w3-border w3-round" placeholder="Enter Product Description" value="{{ $product->description }}">
                  @error('description')
                    <span class="w3-text-red">{{ $message }}</span>
                  @enderror
                </div>
              </div>
              <div class="w3-row w3-margin-bottom">
                <label for="input-1" class="w3-col l2">Price</label>
                <div class="w3-col l10">
                  <input type="text" name="price" class="w3-input w3-border w3-round" placeholder="Enter Product Price" value="{{ $product->price }}">
                  @error('price')
                    <span class="w3-text-red">{{ $message }}</span>
                  @enderror
                </div>
              </div>
              <div class="w3-row w3-margin-bottom">
                <label for="input-1" class="w3-col l2">Image</label>
                <div class="w3-col l10">
                  <input type="file" name="image" class="w3-input w3-border w3-round" placeholder="Enter Product Image">
                  @error('image')
                    <span class="w3-text-red">{{ $message }}</span> 
                  @enderror
                </div>
              </div>
              <div class="w3-row w3-margin-bottom">
                <label for="input-1" class="w3-col l2">is Available</label>
                <div class="w3-col l10">
                  <select name="is_available" class="w3-input w3-border w3-round" placeholder=" ">
                    <option value="1" {{ $product->is_available ? 'selected' : '' }}>Available</option>
                    <option value="0" {{ !$product->is_available ? 'selected' : '' }}>Not Available</option>
                  </select>
                </div>
              </div>
              
              </div>
              
              <div class="w3-row w3-margin-bottom">
                <div class="w3-col l2">&nbsp;</div>
                <div class="w3-col l10">
                  <button type="submit" class="w3-button w3-primary w3-round"><i class="fa fa-fw fa-lock"></i> Update Product</button>
                  <a href="{{ route('products.index') }}" class="w3-button w3-round w3-border">Cancel</a>
                </div>
              </div>
            </form>
          </div>
        </div>
@endsection