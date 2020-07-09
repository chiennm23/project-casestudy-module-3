<?php

namespace App\Http\Requests;

use App\Customer;
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
        $cardCustomer = $this->card;
        $customer = Customer::where('idCard', $cardCustomer)->first();
        $ruleCustomer = ["", ""];
        if (!$cardCustomer) {
            $ruleCustomer[0] = 'unique:customers,idCard';
            $ruleCustomer[1] = 'unique:customers,phone';
        }
        return [
            'name' => 'required|max:18',
            'card' => 'required|min:9|max:12|' . $ruleCustomer[0],
            'phone' => 'required|min:10|max:12|' . $ruleCustomer[1]
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống',
            'name.max' => 'số kí tự nằm trong khoảng 6-18',
            'card.required' => 'CMND không được để trống',
            'card.min' => 'Số kí tự nằm trong khoảng 9-12',
            'card.max' => 'Số kí tự nằm trong khoảng 9-12',
            'card.unique' => 'CMND đã tồn tại',
            'phone.required' => 'số điện thoại không được để trống',
            'phone.min' => 'Số nằm trong khoảng 10-12 hoăc thêm số 0 vào đầu',
            'phone.max' =>  'Số nằm trong khoảng 10-12 hoăc thêm số 0 vào đầu',
            'phone.unique' => 'Số điện thoại đã tồn tại'
        ];
    }
}
