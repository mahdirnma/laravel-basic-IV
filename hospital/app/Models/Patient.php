<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'age',
        'gender',
        'hospital_id',
        'is_active',
    ];
    public function hospital(){
        return $this->belongsTo(Hospital::class);
    }

    public function prescriptions()
    {
        return $this->hasMany(Prescription::class);
    }

    public function information()
    {
        return $this->hasOne(Information::class);
    }
}
