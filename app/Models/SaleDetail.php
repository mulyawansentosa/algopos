<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleDetail extends Model
{
    use HasFactory;

    protected $table = 'sale_details';
    public  $timestamps = true;
    protected $guarded = ['id'];

    public function Sales(){
        return $this->belongsTo('App\Models\Sales');
    }

    public function Product(){
        return $this->belongsTo('App\Models\Product');
    }

}
