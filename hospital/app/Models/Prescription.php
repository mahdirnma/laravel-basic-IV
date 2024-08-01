<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'description',
        'patient_id',
        'hospital_id',
        'is_active'
    ];
    public function patient(){
        return $this->belongsTo(Patient::class);
    }
    public function hospital(){
        return $this->belongsTo(Hospital::class);
    }

}
