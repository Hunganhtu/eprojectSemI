<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Concerns\Validator;
use Str;
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
        return view('back_end.product.add',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $type_img=['image/png','image/jpg','image/gif','image/jpeg'];
        $type_img_detail=['png','jpg','gif','jpeg'];
        $this->validate($request,[
            'name'=>'required|min:3',
            'cat_id'=>'required',
            'image'=>'required',
            'image_detail'=>'required',
            'price'=>'required',
            'description'=>'required'
        ],[
            'name.required'=>'Không được để rỗng tên',
            'name.min'=>'Bạn phải nhập tên lớn hơn 3 ký tự',
            'cat_id.required'=>'Chưa chọn danh mục',
            'image.required'=>'Chưa chọn ảnh sản phẩm',
            'image_detail.required'=>'Chưa chọn ảnh chi tiết',
            'price.required'=>'Chưa nhập giá sản phẩm',
            'description.required'=>'Chưa có mô tả sản phẩm'

        ]);
        $request->merge(['slug'=>Str::slug($request->name)]);

        if($request->has('image')){
            $file=$request->image;
            $type=$file->getClientMimeType();
            if (in_array($type,$type_img)) {
                $file=$request->image;
                $image=rand(100000,999999).$file->getClientOriginalName();
                $file->move(base_path('public/assets/images/product'),$image);
            }else{
                return redirect()->back()->with('errors_image', 'Bạn cần chọn một file ảnh');
            }
        }else {
            return redirect()->back()->with('errors_image', 'Bạn phải chọn ảnh cho sản phẩm');
        }                   
        $image_details=[];
        if($request->has('image_detail')){
            $files=$request->image_detail;
            foreach($files as $file) {
                $type = $file->getClientOriginalExtension();
                $check=in_array($type,$type_img_detail);
                $insert=true;
                if(!$check) {

                    $insert = false;
                    break;
                }
            } 

            foreach ($files as $value) {
                $detail=$value->storeAs("/",rand(100000,999999).$value->getClientOriginalName());
                array_push($image_details,$detail);
                $value->move(base_path('public/assets/images/product'),$detail);

            }
            if ($insert) {
                $image_detail=json_encode($image_details);
                $p=Product::create([
                    'name'=>$request->name,
                    'slug'=>$request->slug,
                    'image_detail'=>$image_detail,
                    'price'=>$request->price,
                    'status'=>$request->status,
                    'cat_id'=>$request->cat_id,
                    'description'=>$request->description,
                    'image'=>$image
                ]);
                return redirect()->route('product.index');
                
            }
            else {
                return redirect()->back()->with('errors_image_detail', 'Sai định dạng file');
            }
        }
        else {
            return redirect()->back()->with('errors_image_detail', 'Bạn phải chọn ảnh cho sản phẩm');
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
       return view('back_end.product.update',compact('data','category','old_detail'));
      
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update($slug,Request $request)
    {
        $data=Product::where('slug',$slug)->first();
       $old_image=$data->image;
       $old_details=$data->image_detail;
       $old_detail=json_decode($old_details);

 $type_img=['image/png','image/jpg','image/gif','image/jpeg'];
       $type_img_detail=['png','jpg','gif','jpeg'];
       $this->validate($request,[
        'name'=>'required|min:3',
        'cat_id'=>'required',
        'price'=>'required',
        'description'=>'required'
    ],[
        'name.required'=>'Không được để rỗng tên',
        'name.min'=>'Bạn phải nhập tên lớn hơn 3 ký tự',
        'cat_id.required'=>'Chưa chọn danh mục',
        'price.required'=>'Chưa nhập giá sản phẩm',
        'description.required'=>'Chưa có mô tả sản phẩm'

    ]);
       $request->merge(['slug'=>Str::slug($request->name)]);

       if($request->has('image')){
        $file=$request->image;
        $type=$file->getClientMimeType();
        if (in_array($type,$type_img)) {
            $file=$request->image;
            $image=rand(100000,999999).$file->getClientOriginalName();
            $file->move(base_path('public/assets/images/product'),$image);

            $Path='public/assets/images/product/'.$old_image;
             if (unlink($Path)) {    
                echo "success";
            } else {
                echo "fail";    
         }     
        }else{
            return redirect()->back()->with('errors_image', 'Bạn cần chọn một file ảnh');
        }
    }else {
      $image= $data->image;
  }                   
  $image_details=[];
  if($request->has('image_detail')){

    $files=$request->image_detail;
    foreach($files as $file) {
        $type = $file->getClientOriginalExtension();
        $check=in_array($type,$type_img_detail);
        $insert=true;
        if(!$check) {

            $insert = false;
            break;
        }
    } 

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
    if ($insert) {
        $image_detail=json_encode($image_details);

    }
    else {
        return redirect()->back()->with('errors_image_detail', 'Sai định dạng file');
    }
}
else {
  $image_detail=$data->image_detail;
}

Product::where('slug',$slug)->update([
    'name'=>$request->name,
    'slug'=>$request->slug,
    'image_detail'=>$image_detail,
    'price'=>$request->price,
    'status'=>$request->status,
    'cat_id'=>$request->cat_id,
    'description'=>$request->description,
    'image'=>$image
]);


return redirect()->route('product.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
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
    Product::where('id',$id)->delete();
    return redirect()->route('product.index');
}
}
