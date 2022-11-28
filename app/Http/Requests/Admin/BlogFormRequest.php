<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class BlogFormRequest extends FormRequest
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
            'blog_title' => [
                'required',
                'string',
                'max:200'
            ],
            'blog_description' => [
                'required'
            ],
            'blog_image' => [
                'nullable',
               // 'image',
              'mimes:jpg,png,jpeg,gif,svg'
            ],
        ];

        return $rules;
    }
}
