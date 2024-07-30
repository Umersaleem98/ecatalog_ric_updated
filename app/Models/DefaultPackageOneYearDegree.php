<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DefaultPackageOneYearDegree extends Model
{
    use HasFactory;
    protected $table = 'default_package_one_year_degree';
    protected $fillable = [
        'program_type',
        'degree',
        'seats',
        'degree_name',
        'totalAmount',
        'donor_name',
        'donor_email',
        'phone',
        'about_partner',
        'country',
        'year',
        'payments_status',
        'prove',
    ];
}
