<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_reg',
        'amount',
        'date',
        'status',
        'student_Name',
        'user_id',
        'student_id',
        'description',
        'type'
    ];
}
