<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradeSheet extends Model
{
    use HasFactory;
    protected $fillable=[
        'average',
        'student_id',
        'is_active',
    ];
    public function student(){
        return $this->belongsTo(Student::class);
    }
}
