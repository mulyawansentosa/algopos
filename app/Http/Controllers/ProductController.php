<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('pages.product.index',compact('products'));
    }
    public function create(){
        return view('pages.product.create');        
    }
    public function store(Request $data){
        $validateData = $data->validate([
            'code' => 'required|unique:products',
            'name' => 'required|unique:products',
            'sell_price' => 'required|integer',
            'purchase_price' => 'required|integer',
            'quantity' => 'required|integer'
        ]);
        DB::beginTransaction();
        try{
            $arr = [
                'code' => $data['code'],
                'name' => $data['name'],
                'sell_price' => $data['sell_price'],
                'purchase_price' => $data['purchase_price'],
                'quantity' => $data['quantity'],
                'category' => $data['category'],
            ];
            Product::create($arr);    
            DB::commit();
            return redirect(route('product.index'));
        }catch(\Exception $err){
            DB::rollback();
            return back()->withInput()->with('status',$err->getMessage());
        }    
    }
    public function edit(){
        
    }
    public function update(){
        
    }
    public function destroy(){
        
    }
}
