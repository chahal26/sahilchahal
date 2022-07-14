<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'name',
        'desc',
        'meta_title',
        'meta_desc',
        'is_active'
    ];

    public function blogs()
    {
        return $this->belongsToMany(Blog::class);
    }

}
