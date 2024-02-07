<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategories extends Model
{
    use HasFactory;

    protected $fillable=[
        'category_id',
        'name',
        'description'
    ];

    public function categories(){
        $this->hasOne(Categories::class);
    }
}
