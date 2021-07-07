<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['name', 'slug'];

    // Ham OneToMany 1 menu co nhieu cate
    public function categories()
    {
        return $this->hasMany('App\Models\Category');
    }
}
