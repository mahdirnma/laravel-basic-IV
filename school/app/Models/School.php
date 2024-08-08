<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'city',
        'address',
        'telephone',
        'type',
        'is_active',
    ];

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
