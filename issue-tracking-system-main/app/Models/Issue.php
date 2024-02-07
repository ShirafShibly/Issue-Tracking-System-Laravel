<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'body',
        'uuid',
        'slug'
    ];

    //get data from comments models
    public function getCommentData()
    {
        return $this->hasMany(comments::class,'issue_id');
    }
}
