<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description'];

    public function fees()
    {
        return $this->hasMany(Fee::class, 'program_id');
    }

    public function endowments()
    {
        return $this->hasMany(Endowment::class, 'program_id');
    }
}
