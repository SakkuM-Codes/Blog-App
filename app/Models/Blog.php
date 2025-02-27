<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'image', 'excerpt', 'content', 'duration', 'is_feature', 'slug','user_id'];

    public function User(): HasMany
    {

        return $this->hasMany(User::class);
    }

    public function categorys()
    {
        return $this->belongsToMany(Category::class, 'blogs_categorys', 'blog_id', 'category_id');
    }

}
