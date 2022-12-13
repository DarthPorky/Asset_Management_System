<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'serial_number',
        'price',
        'depriciation_type',
        'location',
        'vendor',
        'description'
    ];
}
