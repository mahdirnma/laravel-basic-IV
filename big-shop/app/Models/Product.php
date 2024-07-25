<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'description',
        'price',
        'category_id',
        'entity',
        'is_active',
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function picture(){
        return $this->hasOne(Picture::class);
    }
}
