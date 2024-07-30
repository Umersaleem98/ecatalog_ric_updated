<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DefaulPackagetFullDegree extends Model
{
    use HasFactory;
    protected $table = 'default_package_full_degree';
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
