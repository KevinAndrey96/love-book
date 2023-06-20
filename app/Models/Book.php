<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';

    protected $fillable = [
        'id',
        'pdf',
        'name',
        'status'
    ];

    public function transaction()
    {
        return $this->hasOne(Transaction::class);
    }
}
