@extends('layouts.main')
@section('content')
    <h2>Product Form</h2>
    <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="inputAddress">Product Code</label>
            <input name="code" type="text" class="form-control form-control-user @error('code') is-invalid @enderror" id="code" placeholder="Kode Barang">
            @error('code')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="inputAddress2">Product Name</label>
            <input name="name" type="text" class="form-control form-control-user @error('name') is-invalid @enderror" id="name" placeholder="Product Name">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="inputAddress2">Sell Price</label>
            <input name="sell_price" type="number" class="form-control form-control-user @error('sell_price') is-invalid @enderror" id="sell_price" placeholder="Sell Price">
            @error('sell_price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="inputAddress2">Buy Price</label>
            <input name="purchase_price" type="number" class="form-control form-control-user @error('purchase_price') is-invalid @enderror" id="purchase_price" placeholder="Buy Price">
            @error('purchase_price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="inputAddress2">Quantity</label>
            <input name="quantity" type="number" class="form-control form-control-user @error('quantity') is-invalid @enderror" id="quantity" placeholder="Quantity">
            @error('quantity')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="inputState">Category</label>
            <select name="category" id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option value="Shoes">Shoes</option>
                <option value="T-Shirt">T-Shirt</option>
            </select>
            @error('category')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
