<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GambarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'image' => 'required',
            'image.*' => 'images|mimes:jpeg,png,jfif,jpg,svg,gif|max:4080',
        ];
    }
}
