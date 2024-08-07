<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    protected $fillable=[
        'description',
        'grades',
        'student_id',
        'is_active',
    ];
    public function student(){
        return $this->belongsTo(Student::class);
    }
}
