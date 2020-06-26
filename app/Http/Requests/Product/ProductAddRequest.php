<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductAddRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'name'=>'required|min:3',

            'cat_id'=>'required',
            'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
            'image_detail' => 'required',
            'image_detail.*'=>'image|mimes:jpeg,jpg,png,gif|max:10000',
            'price'=>'required'
            
        ];
    }

    // Thông báo lỗi
    public function messages()
    {
           return [
            'name.required'=>'Chưa nhập tên sản phẩm',
            'name.min'=>'Bạn phải nhập tên lớn hơn 3 ký tự',
            'cat_id.required'=>'Chưa chọn danh mục',
            'image.required'=>'Chưa chọn ảnh sản phẩm',
            'image.mimes'=>'Ảnh sai định dạng',
            'image.max'=>'Kich thước ảnh quá lớn',
            'image_detail.required'=>'Chưa chọn ảnh chi tiết',
            'image_detail.*.image'=>'Ảnh chi tiết sai định dạng',
            'image_detail.*.max'=>'Kich thước ảnh quá lớn',
            'price.required'=>'Chưa nhập giá sản phẩm'
           
           ];
    }   
}
