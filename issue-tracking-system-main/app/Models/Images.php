<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;

    protected $fillable=[
        'imagable_type',
        'imagable_id',
        'size',
        'path',
        'name',
        'extension'
    ];
}
