<?php

namespace App\Http\Requests\Category;
use Illuminate\Foundation\Http\FormRequest;

class CategoryAddRequest extends FormRequest
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
            'name'=>'required|min:3'
        ];
    }

    // Thông báo lỗi
 public function messages()
    {
        return [
            'name.required'=>'Không được để rỗng tên',
            'name.min'=>'Bạn phải nhập tên lớn hơn 3 ký tự',
        ];
    }
}
