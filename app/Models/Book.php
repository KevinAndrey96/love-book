<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';

    protected $fillable = [
        'shopper_id',
        'pdf',
        'name',
        'status'
    ];

    // Relación muchos a uno con la tabla de compradores
    public function comprador()
    {
        return $this->belongsTo(Shopper::class, 'shopper_id');
    }
}
