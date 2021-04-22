@extends('layouts.main')
@section('content')
    <h2>Product List</h2>
    <div style="text-align:right;margin-bottom: 20px;">
      <a href="{{ route('product.create') }}"><button class="btn btn-lg btn-success">New</button></a>
    </div>

    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Code</th>
          <th scope="col">Name</th>
          <th scope="col">Sell Price</th>
          <th scope="col">Buy Price</th>
          <th scope="col">Quantity</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @php $no = 1; @endphp
        @foreach($products as $product)
        <tr>
          <th scope="row">{{ $no }}</th>
          <td>{{ $product->code }}</td>
          <td>{{ $product->name }}</td>
          <td>{{ $product->sell_price }}</td>
          <td>{{ $product->purchase_price }}</td>
          <td>{{ $product->quantity }}</td>
          <td>{{ $product->category }}</td>
        </tr>
        @php $no++; @endphp
        @endforeach
      </tbody>
    </table>    
@endsection
