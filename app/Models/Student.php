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
        'form_b',
        'education',
        'temp_address',
        'permanent_address',
        'previous_school'

    ];
}
