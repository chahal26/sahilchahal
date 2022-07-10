<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'parent_id',
        'slug',
        'name',
        'desc',
        'image',
        'meta_title',
        'meta_desc',
        'is_active'
    ];

    public function blogs()
    {
        return $this->belongsToMany(Blog::class);
    }

    public function parent() {
        return $this->hasOne(Category::class,'id','parent_id') ;
    }

    public function children() {
        return $this->hasMany(Category::class,'parent_id','id');
    }
}
