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
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>@mdo</td>
          <td>@mdo</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@mdo</td>
          <td>@mdo</td>
          <td>@mdo</td>
          <td>@fat</td>
        </tr>
      </tbody>
    </table>    
@endsection
