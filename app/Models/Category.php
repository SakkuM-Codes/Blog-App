<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    use HasFactory;

    protected $fillable = ['category_name', 'is_active'];

    public function Blog(): HasMany
    {

        return $this->hasMany(Blog::class);

    }
}
