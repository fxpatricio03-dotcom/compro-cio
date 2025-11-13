<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    

    protected $fillable = ['category_id', 'title', 'slug', 'content'];

    //object relation mapping
    //belongsTo) banyak blog ke 1 category

    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id', 'id');
    }
}
