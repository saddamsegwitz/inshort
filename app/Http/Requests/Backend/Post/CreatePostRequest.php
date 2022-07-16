<?php

namespace App\Http\Requests\Backend\Post;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
            'category_id' => 'required|exists:categories,id',
            'title_en' => 'required|string',
            'image_en' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'body_en' => 'required'
        ];

        foreach (config('app.available_locales') as $locale) {
            $rules['title_' . $locale] = 'string';
            $rules['image_' . $locale] = 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048';
            $rules['body_' . $locale] = 'nullable';
        }

        return $rules;
    }
}
