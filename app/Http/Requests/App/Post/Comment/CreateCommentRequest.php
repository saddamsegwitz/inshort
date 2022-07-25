<?php

namespace App\Http\Requests\App\Post\Comment;

use Illuminate\Foundation\Http\FormRequest;

class CreateCommentRequest extends FormRequest
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
        if ($this->has('comment_te')) {
            $rules = [
                'comment_te' => 'required|string|max:255'
            ];
        } else {
            $rules = [
                'comment_en' => 'required|string|max:255'
            ];
        }
        return $rules;
    }
}
