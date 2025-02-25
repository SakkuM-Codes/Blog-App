<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'image', 'excerpt', 'content', 'duration', 'is_feature', 'slug', 'category_id', 'user_id'];

    public function User(): HasMany
    {

        return $this->hasMany(User::class);
    }

    public function Category(): belongsTo
    {
        return $this->belongsTo(Category::class);
    }

}
