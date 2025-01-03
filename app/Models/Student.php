<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $tabel ='students';
    protected $fillable  =[
        'name',
        'student_id',
         'address_1',
        'address_2'
    ];
}
