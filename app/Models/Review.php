<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    use HasUuids;

    protected $primaryKey = 'uid';
    protected $table = 'reviews';
    protected $keyType = 'string';

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'rating',
    ];

}
