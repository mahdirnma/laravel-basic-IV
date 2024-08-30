<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airplane extends Model
{
    use HasFactory;
    protected $fillable=[
        'flight_code',
        'capacity',
        'type',
    ];

    public function clients()
    {
        return $this->belongsToMany(Client::class)
        ->withPivot(['flight_time','seat_number','line'])
        ->withTimestamps();
    }
}
