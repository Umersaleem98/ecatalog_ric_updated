<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerpetualSeat extends Model
{
    use HasFactory;

    protected $table = 'endowment_support__perpetual__seat_in__your__name';
    protected $fillable = [
        'program',
        'endowment_type',
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
        'prove'
    ];

}
