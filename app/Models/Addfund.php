<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addfund extends Model
{
    use HasFactory;
   
    protected $table = 'addfunds';
    protected $fillable = [
        'name',
        'email',
        'amount',
        'invest',
        'image',
        'city',
        'info',
    ];
}
