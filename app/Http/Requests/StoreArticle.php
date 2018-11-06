<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticle extends FormRequest
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
            'title' => 'required|unique:articles|max:30|',
            'date' => 'required|date_format:"Y-m-d"',
            'content' => 'required',
            'keywords' => 'required',
            'cover' => 'required|max:2000|mimes:jpg,png,jpeg|mimetypes:image/*',
        ];
    }
}
