<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable=[
        'firstname',
        'lastname',
        'age',
        'gender',
        'address',
        'school_id',
        'is_active',
    ];
    public function school(){
        return $this->belongsTo(School::class);
    }
    public function gradeSheets(){
        return $this->hasMany(GradeSheet::class);
    }

    public function file()
    {
        return $this->hasone(File::class);
    }
}
