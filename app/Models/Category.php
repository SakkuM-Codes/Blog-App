<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    use HasFactory;

    protected $fillable = ['category_name', 'is_active', 'slug'];

    protected $table = 'categorys';

    public function blogs()
    {
        return $this->belongsToMany(Blog::class, 'blogs_categorys', 'category_id', 'blog_id');
    }
}
