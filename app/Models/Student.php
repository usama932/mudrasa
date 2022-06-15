<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'father_name',
        'dob',
        'cnic',
        'father_occupation',
        'home_address',
        'previous_address',
        'previous_school',
        'image',
        'mobile_no',
        'course_id',
        'add_type',
        'reg_no',
        'instructor',
        'Enroll_type',
        'passing_year'
    ];
}
