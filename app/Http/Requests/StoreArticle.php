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
            'title' => 'required|unique:articles,title,'.$this->segment(3).'|max:80|',
            'date' => 'required|date_format:"Y-m-d"',
            'excerpt' => 'required',
            'content' => 'required',
            'keywords' => 'required',
            'cover' => 'max:2000|mimes:jpg,png,jpeg|mimetypes:image/*',
        ];
    }
}
