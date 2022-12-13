<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assign extends Model
{
    use HasFactory;

    protected $fillable = [
        'vendor',
        'location',
        'asset_name',
        'department',
        'assign_to',
        'description',
    ];
}
