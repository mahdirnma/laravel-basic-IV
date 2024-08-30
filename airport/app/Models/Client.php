<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'gender',
        'birth_year'
    ];

    public function airplanes()
    {
        return $this->belongsToMany(Airplane::class)
            ->withPivot(['flight_time','seat_number','line'])
            ->withTimestamps();
    }
}
