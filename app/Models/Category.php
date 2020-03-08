<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = [
        'name',
        'user_id',
    ];


    public function ShowNameUser()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

}
