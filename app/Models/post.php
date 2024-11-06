<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;

class post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'slug',
        'image', 
        'page', 
        'content', 
        'status'];

        public function comment()
{
    return $this->hasMany(Comment::class);
}
}
