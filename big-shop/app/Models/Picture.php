<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    use HasFactory;
    protected $fillable=[
        'main_picture',
        'picture_1',
        'picture_2',
        'product_id',
//        'status',
        'is_active'
    ];
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
