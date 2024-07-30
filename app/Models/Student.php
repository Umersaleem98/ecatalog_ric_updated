<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'studentss';

    protected $fillable = [
        'name',
        'father_name',
        'institution',
        'discipline',
        'scholarship_name',
        'donor_name',
        'province',
        'city',
        'gender',
        'program',
        'degree',
        'year_of_admission',
        'father_status',
        'father_profession',
        'monthly_income',
        'statement_of_purpose',
        'images',
        'make_pledge',
        'payment_approved'

    ];
}
