<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;
    protected $fillable=[
        'description',
        'patient_id',
        'is_active'
    ];
    public function patient(){
        return $this->belongsTo(Patient::class);
    }
}
