<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shopper extends Model
{
    protected $table = 'shoppers';

    protected $fillable = [
        'names',
        'lastnames',
        'address',
        'phone_number',
        'email',
    ];

   
}

