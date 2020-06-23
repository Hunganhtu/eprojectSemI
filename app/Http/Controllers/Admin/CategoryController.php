<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Concerns\Validator;
use Str;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=Category::all();
      return view('back_end.Category.list',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back_end.Category.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|min:3'
        ],[
            'name.required'=>'Không được để rỗng tên',
            'name.min'=>'Bạn phải nhập tên lớn hơn 3 ký tự',

        ]);
       $request->merge(['slug'=>Str::slug($request->name)]);
     $data=Category::create([
        'name'=>$request->name,
        'slug'=>$request->slug,
        'status'=>$request->status

     ]);
    return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category,$slug)
    {
        $data=Category::where('slug',$slug)->first();
        return view('back_end.Category.update',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $request->merge(['slug'=>Str::slug($request->name)]);
        Category::where('slug',$slug)->update([
            'name'=>$request->name,
            'slug'=>$request->slug,
            'status'=>$request->status
        ]);
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function delete($slug)
    {
       Category::where('slug',$slug)->delete();
       return redirect()->route('category.index');
    }
}
