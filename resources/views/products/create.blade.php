@extends('dashlayout.app')   
@section('contentdash')
<div class="w3-white w3-round w3-margin-bottom w3-border" style="">
          <header class="w3-padding-large w3-large w3-border-bottom" style="font-weight: 500">Create Product</header>
          <div class="w3-padding-large">
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
              <div class="w3-row w3-margin-bottom">
                <label for="input-1" class="w3-col l2">Name</label>
                <div class="w3-col l10">
                  <input type="text" class="w3-input w3-border w3-round" placeholder="Enter Product Name">
                </div>
              </div>
              <div class="w3-row w3-margin-bottom">
                <label for="input-1" class="w3-col l2">Description</label>
                <div class="w3-col l10">
                  <input type="text" class="w3-input w3-border w3-round" placeholder="Enter Product Description">
                </div>
              </div>
              <div class="w3-row w3-margin-bottom">
                <label for="input-1" class="w3-col l2">Price</label>
                <div class="w3-col l10">
                  <input type="text" class="w3-input w3-border w3-round" placeholder="Enter Product Price">
                </div>
              </div>
              <div class="w3-row w3-margin-bottom">
                <label for="input-1" class="w3-col l2">is Available</label>
                <div class="w3-col l10">
                  <select class="w3-input w3-border w3-round" placeholder=" ">
                    <option value="1">Available</option>
                    <option value="0">Not Available</option>
                  </select>
                </div>
              </div>
              
              </div>
              
              <div class="w3-row w3-margin-bottom">
                <div class="w3-col l2">&nbsp;</div>
                <div class="w3-col l10">
                  <button type="submit" class="w3-button w3-primary w3-round"><i class="fa fa-fw fa-lock"></i> Create Product</button>
                  <a href="{{ route('products.index') }}" class="w3-button w3-round w3-border">Cancel</a>
                </div>
              </div>
            </form>
          </div>
        </div>
@endsection