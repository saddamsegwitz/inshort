<?php

namespace App\Http\Requests\Backend\Category;

use Illuminate\Foundation\Http\FormRequest;

class CreateCategoryRequest extends FormRequest
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
        $rules = [
            'name_en' => 'required',
            'image_en' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ];

        foreach (config('app.available_locales') as $locale) {
           $rules['name_'.$locale] = 'string';
           $rules['image_'.$locale] = 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048';
        }

        return $rules;
    }
}
