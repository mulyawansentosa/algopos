@extends('layouts.main')
@section('content')
            @if(session('status'))
                <div class="card shadow bg-danger text-white">
                    <div class="card-body">{!! session('status') !!}</div>
                </div>
            @endif

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Product Management</h1>
            <div class="d-none d-sm-inline-block">
                <a href="{{ route('product.create',$id) }}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-edit fa-sm text-white-50"></i> Add Product</a>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
            </div>
          </div>
          <!-- Content Row -->
          <div class="row">
            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Product List</h6>
                      <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                          <div class="dropdown-header">Dropdown Header:</div>
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                      </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th width="20%">Name</th>
                                    <th width="15%">Price</th>
                                    <th width="10%">Qty</th>
                                    <th width="10%">Tax</th>
                                    <th width="10%">Discount</th>
                                    <th width="15%">Total</th>
                                    <th width="15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($items as $item)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $item->product->name }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{!! $item->qty_item !!}</td>
                                        <td>{!! (is_numeric($item->tax)) ? "Rp " . number_format($item->tax,0,',','.') : 0 !!}</td>
                                        <td>{!! (is_numeric($item->discount)) ? "Rp " . number_format($item->discount,0,',','.') : 0 !!}</td>
                                        <td>{!! "Rp " . number_format($item->total,0,',','.') !!}</td>
                                        <td>
                                          <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              Action
                                            </button>
                                            <div class="dropdown-menu">
                                              <a href="{{ route('product.edit',$item->id) }}" class="dropdown-item">Edit</a>
                                              <a href="{{ route('product.destroy',['id' => $id, 'itemid' => $item->id]) }}" class="dropdown-item" onclick="return confirm('Confirm Delete')">Delete</a>
                                            </div>
                                          </div>
                                      </td>
                                  </tr>
                                    @php $no++; @endphp                                
                                @endforeach
                              </tbody>
                        </table>        
                        <div class="d-none d-sm-inline-block" style="float:right;">
                          {{ $items->links() }}
                        </div>          
                      </div>
                  </div>                
            </div>
        </div>
        @endsection
