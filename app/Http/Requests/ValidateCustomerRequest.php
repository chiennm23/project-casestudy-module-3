<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateCustomerRequest extends FormRequest
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
            'name'=>'required|max:18',
            'card'=>'required|min:9|max:12|unique:customers,idCard',
            'phone'=>'required|unique:customers,phone'
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Tên không được để trống',
            'name.max'=>'số kí tự nằm trong khoảng 6-18',
            'card.required'=>'CMND không được để trống',
            'card.min'=>'Số kí tự nằm trong khoảng 9-12',
            'card.max'=>'Số kí tự nằm trong khoảng 9-12',
            'card.unique'=>'CMND đã tồn tại',
            'phone.required'=>'số điện thoại không được để trống',
            'phone.unique'=>'Số điện thoại đã tồn tại'
        ];
    }
}
