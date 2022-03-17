<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seed extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'arrive_date',
        'number',
        'seed_type_id'
    ];
}
