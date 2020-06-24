<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Str;
class Category extends Model
{
   
   protected $fillable=['name','slug','status'];

    public function add()
    {
	     $data=Category::create([
	        'name'=>request()->name,
	        'slug'=>Str::slug(request()->name),
	        'status'=>request()->status

	     ]);
	     return $data;

    }
    public function edit($slug)
    {
    	 Category::where('slug',$slug)->update([
            'name'=>request()->name,
            'slug'=>Str::slug(request()->name),
            'status'=>request()->status
        ]);
    }
    public function destroys($slug)
    {
    	Category::where('slug',$slug)->delete();
    }
}
