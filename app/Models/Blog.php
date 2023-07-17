<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function multiImg()
    {
        return $this->hasMany(blogMultiImage::class,'blog_id','id');
    }
}
