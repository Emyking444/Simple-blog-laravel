<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



// class Post extends Model
// {
//     protected $fillable = ['title', 'content', 'image'];

// }
class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'image'];
    // Ensure correct image path
    public function getImageUrlAttribute()
    {
        return $this->image ? asset('storage/posts/' . $this->image) : null;
    }
}