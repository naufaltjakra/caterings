<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['name', 'picture', 'type', 'description', 'price'];

    public function categories()
    {
    	return $this->belongsToMany('App\Category');
    }
}
