<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'points',
        'birthdate'
    ];

    // protected $dates = [
    //     'birthdate'
    // ];

    protected $casts = [
        'birthdate' => 'datetime:d/m/Y',
        'created_at' => 'datetime:d/m/Y'
    ];
}
