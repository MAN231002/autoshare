<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false) {
            $query
                ->where('description', 'like', '%' . request('search') . '%')
                ->orWhere('brand', 'like', '%' . request('search') . '%');
        }
    }


    public function category()
    {
        return $this -> belongsTo(Category::class);
    }

    public function author()
    {
        return $this -> belongsTo(User::class, 'user_id');
    }
}
