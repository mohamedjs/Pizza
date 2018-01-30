<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use URL;

class Pizza extends Model
{
  protected $fillable = [
      'id','sub_id','pizza_name','pizza_image','pizza_component','pizza_datiles','small','medium','larg'
  ];

  public function setPizzaImageAttribute($value){
    $img_name = time().'.'.$value->getClientOriginalExtension();
    $value->move(public_path('img'),$img_name);
    $this->attributes['pizza_image']= URL::to('/').'/img'.'/'.$img_name ;
  }
    public function subcategory()
    {
      return $this->belongsTo('App\SubCategory','sub_id');
    }
    public function users()
    {
      return $this->beLongsToMany('App\User','boughts')->withPivot('price');;
    }
}
