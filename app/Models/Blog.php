<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'slug',
        'name',
        'desc',
        'image',
        'meta_title',
        'meta_desc',
        'is_active'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
