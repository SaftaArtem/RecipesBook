<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = ['name', 'description'];

    public function ingredients() {
        return $this->belongsToMany('App\Ingredient');
    }
}
