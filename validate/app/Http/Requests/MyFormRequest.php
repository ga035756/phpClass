<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class MyFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            // 'a' => 'required|max:5', //預設訊息
            // 'password' => 'confirmed|required'
            // 'password' => ['confirmed', 'required', Password::min(8)]
            'account'=> 'unique:UserInfo,uid'


        ];
    }

    function messages()
    {
        return [
            'a.required' => 'no data insert',
            'a.max' => ['string' => 'max length overflow :max str']
        ];
    }
}
