<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'slug', 'image'];

    // Ham OneToMany nguoc truy van nguoc
    public function menu()
    {
        return $this->belongTo('App\Models\Menu');
    }
}
