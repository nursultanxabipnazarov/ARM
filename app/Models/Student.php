<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id', 'full_name', 'short_name', 'first_name', 'second_name', 'third_name','student_id_number'
    ];
}
