<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'contact_person_name',
        'contact_person_email',
        'contact_person_phoneNumber',
        'status',
    ];
}
