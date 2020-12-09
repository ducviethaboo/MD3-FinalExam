<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddRequest extends FormRequest
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
            'agencyName' => 'required',
            'agencyAddress' => 'required',
            'agencyPhone' => 'required',
            'agencyManager' => 'required',
            'agencyEmail' => 'required'
            //
        ];
    }

    public function messages()
    {
        return [
            'agencyName.required' => 'Tên đại lý không được để trống',
//            'agencyName.unique' => 'Đại lý đã tồn tại',
            'agencyAddress.required' => 'Địa chỉ không được để trống',
            'agencyPhone.required' => 'Điện thoại không được để trống',
            'agencyManager.required' => 'Tên người quản lý không được để trống',
            'agencyEmail.required' => 'Email không được để trống',
        ];
    }
}
