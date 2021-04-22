<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    
    protected $table = 'sales';
    public  $timestamps = true;
    protected $guarded = ['id'];

    public function SalesDetail(){
        return $this->hasMany('App\Models\SalesDetail');
    }
}
