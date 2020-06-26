<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\Product\ProductAddRequest as RequestPro;
use App\Http\Requests\Product\ProductUpdateRequest as UpdatePro;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Concerns\Validator;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=Product::all();
        return view('back_end.product.list',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::all();
        $product=Product::all();
        return view('back_end.product.add',compact('category','product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Product $product ,RequestPro $request)
    {

            if ($product->add()) {
                return redirect()->route('product.index');
            }else {
                return redirect()->back();
            }
       


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
       $category=Category::all();
       $data=Product::where('slug',$slug)->first();
       $old_image=$data->image;
       $old_details=$data->image_detail;
       $old_detail=json_decode($old_details);
       $product=Product::all();
       $related_product=$data->related_product;
       $related_product=json_decode($related_product);
       return view('back_end.product.update',compact('data','category','old_detail','product','related_product'));
      
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Product $product,UpdatePro $request,$slug)
    {
       
     if ($product->edit($slug)) {
         return redirect()->route('product.index');
     }
        
       

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function delete(Product $product ,$id)
    {

    
            if ($product->destroys($id)) {
                return redirect()->route('product.index');
            }else {
                return redirect()->back();
            }
    
    }
    public function detail($slug)
    {
     
        $product=Product::where('slug',$slug)->first();
        $id_relate=$product->related_product;
        $id_relate=json_decode($id_relate);
        $image_details=$product->image_detail;
       $image_detail=json_decode($image_details);
       $related_product=[];
      foreach ($id_relate as $value) {
           $p=Product::where('id',$value)->first();
           array_push($related_product, $p);  
      }
    
        return view('back_end.product.product-detail',compact('product','image_detail','related_product'));
    }
}
