<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class ProductFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [
            'product_name' => [
                'required',
                'string',
                'max:200'
            ],
            'product_price' => [
                'required'
            ],
            'product_image' => [
                'nullable',
               // 'image',
              'mimes:jpg,png,jpeg,gif,svg'
            ],
            'quantity' => [
                'required',
            ],
        ];

        return $rules;
    }
}
