<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FundAProject extends Model
{
    use HasFactory;
    protected $table = 'fund_a_project';
    protected $fillable = [
        'project_name',
        'donor_name',
        'donor_email',
        'phone',
        'amount_for',
        'amount',
    ];
}
