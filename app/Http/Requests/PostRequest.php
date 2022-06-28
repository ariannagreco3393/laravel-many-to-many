<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
                'title' => ['required', Rule::unique('posts', 'title')->ignore($this->post), 'max:150'],
                'content'=>['nullable'],
                'category_id'=> ['nullable' ,'exists:categories,id'],
                'tags' => ['exists:tags,id'],
                'cover_image'=>['nullable'],
            ];
    }
}
