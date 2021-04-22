@extends('layouts.main')
@section('content')
            @if(session('status'))
                <div class="card shadow bg-danger text-white">
                    <div class="card-body">{!! session('status') !!}</div>
                </div>
            @endif
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Transaction Product Management</h1>
            </div>
            <!-- Content Row -->
            <div class="row">
            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Transaction Product Form</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <form method="POST" action="{{ route('product.update') }}" enctype="multipart/form-data">
                            @csrf  
                            <div class="form-group row">
                                <label for="date" class="col-md-3 col-form-label text-md-right">{{ __('Date') }}</label>
                            
                                <div class="col-md-8 mb-3 mb-sm-0">
                                    <input id="date" type="date" class="form-control form-control-user @error('date') is-invalid @enderror" name="date" value="{{ $item->date->format('Y-m-d') }}" required autocomplete="date">
                            
                                    @error('date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                                
                            <div class="form-group row">
                                <label for="product_id" class="col-md-3 col-form-label text-md-right">{{ __('Product') }}</label>
                                <input type="hidden" name="id" value="{{ $item->id }}"/>
                                <input type="hidden" name="transaction_id" value="{{ $item->transaction_id }}"/>
                                <div class="col-md-8 mb-3 mb-sm-0">
                                    <select name="product_id" id="product_id" class="form-control form-control-user @error('product_id') is-invalid @enderror" value="{{ $item->product_id }}" required autocomplete="product_id">
                                        @foreach($items as $prod)
                                            <option value="{{ $prod->id }}" {{ ($item->product_id == $prod->id) ? 'selected' : ''}}>{{ $prod->name.' | Rp ' . number_format($prod->price,2,',','.') }}</option>                                            
                                        @endforeach
                                    </select>
                                    @error('product_id')
                                        <span class="invalid-feedback" product_id="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="qty_item" class="col-md-3 col-form-label text-md-right">{{ __('Product Quantity') }}</label>
                                <div class="col-md-8 mb-3 mb-sm-0">
                                    <input id="qty_item" type="number" class="form-control form-control-user @error('qty_item') is-invalid @enderror" name="qty_item" value="{{ $item->qty_item }}" required autocomplete="qty_item">
                            
                                    @error('qty_item')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cost" class="col-md-3 col-form-label text-md-right">{{ __('Cost of Sales') }}</label>
                            
                                <div class="col-md-8 mb-3 mb-sm-0">
                                    <input id="cost" type="number" class="form-control form-control-user @error('cost') is-invalid @enderror" name="cost" value="{{ $item->cost }}" required autocomplete="cost" readonly>
                            
                                    @error('cost')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="total_cost" class="col-md-3 col-form-label text-md-right">{{ __('Total Cost') }}</label>
                            
                                <div class="col-md-8 mb-3 mb-sm-0">
                                    <input id="total_cost" type="number" class="form-control form-control-user @error('total_cost') is-invalid @enderror" name="total_cost" value="{{ $item->total_cost }}" required autocomplete="total_cost" readonly>
                            
                                    @error('total_cost')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="price" class="col-md-3 col-form-label text-md-right">{{ __('Price') }}</label>
                            
                                <div class="col-md-8 mb-3 mb-sm-0">
                                    <input id="price" type="number" class="form-control form-control-user @error('price') is-invalid @enderror" name="price" value="{{ $item->price }}" required autocomplete="price" readonly>
                            
                                    @error('price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="amount" class="col-md-3 col-form-label text-md-right">{{ __('Amount') }}</label>
                            
                                <div class="col-md-8 mb-3 mb-sm-0">
                                    <input id="amount" type="number" class="form-control form-control-user @error('amount') is-invalid @enderror" name="amount" value="{{ $item->amount }}" required autocomplete="amount" readonly>
                            
                                    @error('amount')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="discount" class="col-md-3 col-form-label text-md-right">{{ __('Discount') }}</label>
                            
                                <div class="col-md-8 mb-3 mb-sm-0">
                                    <input id="discount" type="number" class="form-control form-control-user @error('discount') is-invalid @enderror" name="discount" value="{{ $item->discount }}" autocomplete="discount">
                            
                                    @error('discount')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tax_rate" class="col-md-3 col-form-label text-md-right">{{ __('Tax Rate (%)') }}</label>
                            
                                <div class="col-md-8 mb-3 mb-sm-0">
                                    <input id="tax_rate" type="number" class="form-control form-control-user @error('tax_rate') is-invalid @enderror" name="tax_rate" value="{{ $item->tax_rate }}" autocomplete="tax_rate" readonly>
                            
                                    @error('tax_rate')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tax" class="col-md-3 col-form-label text-md-right">{{ __('Tax') }}</label>
                            
                                <div class="col-md-8 mb-3 mb-sm-0">
                                    <input id="tax" type="number" class="form-control form-control-user @error('tax') is-invalid @enderror" name="tax" value="{{ $item->tax }}" autocomplete="tax" readonly>
                            
                                    @error('tax')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="total" class="col-md-3 col-form-label text-md-right">{{ __('Total') }}</label>
                            
                                <div class="col-md-8 mb-3 mb-sm-0">
                                    <input id="total" type="number" class="form-control form-control-user @error('total') is-invalid @enderror" name="total" value="{{ $item->total }}" required autocomplete="total" readonly>
                            
                                    @error('total')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                                                                                    
                            <div class="form-group row">
                                <label for="description" class="col-md-3 col-form-label text-md-right">{{ __('Description') }}</label>
                            
                                <div class="col-md-8 mb-3 mb-sm-0">
                                    <input id="description" type="text" class="form-control form-control-user @error('description') is-invalid @enderror" name="description" value="{{ $item->description }}" autocomplete="description">
                            
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <div class="col-md-12 offset-md-12">
                                    <button type="submit" class="btn btn-user btn-primary btn-block">
                                        {{ __('Save') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>                
            </div>
        </div>
        <script>
            var timer = null;
            $('#product_id').change(function(){
                getData($(this).val());
                calculate();
            });                                      
            $('#qty_item').keyup(function(){
                clearTimeout(timer); 
                timer = setTimeout($('#product_id').val(), 1000)
                calculate();
            });                                      
            $('#discount').keyup(function(){
                clearTimeout(timer); 
                timer = setTimeout($('#product_id').val(), 1000)
                calculate();
            });                                      
            function calculate(id){
                var qty = $('#qty_item').val();
                var cost = $('#cost').val();
                var price = $('#price').val();
                var discount = $('#discount').val();
                var tax_rate = $('#tax_rate').val();
                if(qty.length == 0){
                    qty = 0;
                }
                if(tax_rate.length == 0){
                    tax_rate = 0;
                }
                if(tax.length == 0){
                    tax = 0;
                }
                if(discount.length == 0){
                    discount = 0;
                }
                var rate = 0;
                if(tax_rate !== 0){
                    rate = parseInt(tax_rate)/100;
                }
                amount = ((parseInt(price)*parseInt(qty))-parseInt(discount));
                amt = parseInt(price)*parseInt(qty);
                $('#amount').val(amt);
                tax = (parseInt(amount)*rate);
                $('#tax').val(tax);
                total = (parseInt(amount)+parseInt(tax));
                $('#total').val(total);
                total_cost = (parseInt(cost)*parseInt(qty));
                $('#total_cost').val(total_cost);
            }
            function getData(id){
                $.ajax({
                    url : "{{ route('admin.product.get') }}",
                    method : "GET",
                    data : {id: id},
                    async : false,
                    dataType : 'json',
                    success: function(data){
                        $('#price').val(data['price']);
                        $('#cost').val(data['cost']);
                        $('#tax_rate').val(data['tax']['percent']);
                    }
                });                
            }
            $( window ).load(function() {
                calculate();
            });
        </script>
@endsection
