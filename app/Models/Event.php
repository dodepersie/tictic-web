<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $casts = [
        'image' => 'array',
    ];

    protected $fillable = [
        'name',
        'description',
        'price',
        'event_date',
    ];
}
