<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // protected $table = '<table_name>';
    // protected $primaryKey = '<key>';

    protected $fillable = [
        'title',
        'content',
        'image',
        'user_id',
        'category_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ShowNameCategory()
    {
        return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }
}
