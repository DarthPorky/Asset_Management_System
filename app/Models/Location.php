<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address_line_one',
        'address_line_two',
        'country',
        'city',
        'contact_person_name',
        'contact_person_email',
        'contact_person_phoneNumber',
    ];
}
