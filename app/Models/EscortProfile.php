<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EscortProfile extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [


    ];

    protected $casts = [
        "persoenlichkeit" => 'array',
        'haare' => 'array',
     ];
}