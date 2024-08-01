<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;
    protected $fillable=[
        'tile',
        'city',
        'zone',
        'address',
        'chairman',
        'range',
        'speciality',
        'is_active',
    ];

    public function patients()
    {
        return $this->hasMany(Patient::class);
    }

    public function prescriptions()
    {
        return $this->hasMany(Prescription::class);
    }
}
