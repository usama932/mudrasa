<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'last_degree',
        'phone_number',
        'experiance',
        'address',
        'about_description'
    ];
}
