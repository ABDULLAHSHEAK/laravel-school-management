<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'fa_name',
        'ma_name',
        'student_phone',
        'parents_phone',
        'email',
        'birthdate',
        'address',
        'gender',
        'blood',
        'roll',
        'reg',
        'class',
        'img',
    ];
}
