<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    use HasFactory;

    protected $fillable = ['category_name', 'is_active'];

    protected $table = 'categorys';

    public function Blog(): HasMany
    {

        return $this->hasMany(Blog::class);

    }
}
