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
        'busen_merkmale' => 'array',
        'hautfarbe' => 'array',
        'augenfarbe' => 'array',
        'intimbehaarung' => 'array',
        'koerperschmuck' => 'array',
        'piercing' => 'array',
        'sonstiges'=> 'array',
        'typ' => 'array',
        'sprachen' => 'array',
        'allg_service' => 'array',
        'service_fuer'  => 'array',
        'verkehr'   => 'array',
        'massage' => 'array',
        'service_detail' => 'array',
        'service_basic' => 'array',
        'fetisch_basic' => 'array',
        'fetisch_bizar' => 'array',
        'bizarr' => 'array',

     ];
}
