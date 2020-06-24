<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    protected $fillable=['name','slug','image','image_detail','price','cat_id','description','status'];
     public function category()
   {
   		return $this->hasOne(Category::class ,'id','cat_id');
   }
}
