<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    public function category()
    {
      return $this->belongsTo('App\Category','category_id');
    }
    public function pizzas()
    {
      return $this->hasMany('App\Pizza');
    }
}
