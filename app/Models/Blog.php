<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'image', 'excerpt', 'content', 'duration', 'is_feature', 'slug','user_id'];

    public function User()
    {

        return $this->belongsTo(User::class);
    }

    public function categorys()
    {
        return $this->belongsToMany(Category::class, 'blogs_categorys', 'blog_id', 'category_id');
    }


     // To get category IDs for a specific blog:

    // $blog = Blog::find(1);

    // $category = $blog->categorys->pluck('id')->toArray(); 

}
