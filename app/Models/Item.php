<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $primaryKey = null;

    public $incrementing = false;

    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'imageURL',
    ];
}
