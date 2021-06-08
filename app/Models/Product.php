<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'naziv',
        'cena',
        'naStanju',
        'dimenzije',
        'opis',
        'img' 
    ];

    protected $primaryKey = 'productID';
}
