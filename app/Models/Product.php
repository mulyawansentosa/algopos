<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    public  $timestamps = true;
    protected $guarded = ['id'];

    public function SalesDetail(){
        return $this->hasMany('App\Models\SalesDetail');
    }
}
