<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Session;
use Str;
class Product extends Model
{
    
    protected $fillable=['name','slug','image','image_detail','price','cat_id','description','privacy','service','related_product','paramaster','status'];
     public function category()
   {
   		return $this->hasOne(Category::class ,'id','cat_id');
   }

   public function add()
   {
        

        if(request()->has('image')){
            $file=request()->image;
            $type=$file->getClientMimeType();
            $file=request()->image;
            $image=rand(100000,999999).$file->getClientOriginalName();
            $file->move(base_path('public/assets/images/product'),$image);
            
        }                  
        $image_details=[];
        if(request()->has('image_detail')){
            $files=request()->image_detail;
            foreach ($files as $value) {
                $detail=$value->storeAs("/",rand(100000,999999).$value->getClientOriginalName());
                array_push($image_details,$detail);
                $value->move(base_path('public/assets/images/product'),$detail);

            }
           
                $image_detail=json_encode($image_details);
               
                
            }
           
        $related_product=[];
        if(request()->has('related_product')){
            $related_products=request()->related_product;

            foreach ($related_products as $value) {
                
                array_push($related_product,$value);
              
            }
   
            }

          $related_product=json_encode($related_product);
         $product=Product::create([
                'name'=>request()->name,
                'slug'=>Str::slug(request()->name),
                'image_detail'=>$image_detail,
                'price'=>request()->price,
                'status'=>request()->status,
                'cat_id'=>request()->cat_id,
                'description'=>request()->description,
                'privacy'=>request()->privacy,
                'service'=>request()->service,
                'paramaster'=>request()->paramaster,
                'related_product'=>$related_product,
                'image'=>$image
 			]);
                return $product;

   }
   public function edit($slug)
   {

   	 $data=Product::where('slug',$slug)->first();
       $old_image=$data->image;
       $old_details=$data->image_detail;
       $old_detail=json_decode($old_details);

   
       if(request()->has('image')){
            $file=request()->image;
            $image=rand(100000,999999).$file->getClientOriginalName();
            $file->move(base_path('public/assets/images/product'),$image);

            $Path='public/assets/images/product/'.$old_image;
             if (unlink($Path)) {    
                echo "success";
            } else {
                echo "fail";    
         }     
       
    }else {
      $image= $data->image;
  }                   
  $image_details=[];

  if(request()->has('image_detail')){

	    $files=request()->image_detail;

	    foreach ($files as $value) {
	        $detail=$value->storeAs("/",rand(100000,999999).$value->getClientOriginalName());
	        array_push($image_details,$detail);
	        $value->move(base_path('public/assets/images/product'),$detail);

	    }
	    foreach ($old_detail as $value) {
	        $Path='public/assets/images/product/'. $value;
	        if (unlink($Path)) {    
	            echo "success";
	        } else {
	            echo "fail";    
	        }
	    }
	   
	     $image_detail=json_encode($image_details);
	}else{
	 	 $image_detail=$data->image_detail;
	}
		$related_products=[];
        if(request()->has('related_product')){
            $related_product=request()->related_product;
            foreach ($related_product as $value) {           
                array_push($related_products,$value);         
            }
           
                $related_product=json_encode($related_products);
               
              
            }
            else {
		 		 $related_product=$data->related_product;
			}
$updateproduct=Product::where('slug',$slug)->update([
    'name'=>request()->name,
    'slug'=>Str::slug(request()->name),
    'image_detail'=>$image_detail,
    'price'=>request()->price,
    'status'=>request()->status,
    'cat_id'=>request()->cat_id,
    'description'=>request()->description,
    'privacy'=>request()->privacy,
    'service'=>request()->service,
    'paramaster'=>request()->paramaster,
    'related_product'=>$related_product,
    'image'=>$image
	]);

return $updateproduct;

   }

   public function destroys($id)
   {
	   	 $pro=Product::where('id',$id)->first();
	     $image= $pro->image;
	     $Path='public/assets/images/product/'. $image;
	     if (unlink($Path)) {    
	        echo "success";
	    } else {
	        echo "fail";    
	    }

	    $image_details=$pro->image_detail;
	    $image_detail=json_decode($image_details);
	    foreach ($image_detail as $value) {
	        $Path='public/assets/images/product/'. $value;
	        if (unlink($Path)) {    
	            echo "success";
	        } else {
	            echo "fail";    
	        }
	    }
	    $product=Product::where('id',$id)->delete();
	    return  $product;
   }
}
