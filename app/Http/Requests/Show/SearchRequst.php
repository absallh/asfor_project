<?php

namespace App\Http\Requests\Show;

use Illuminate\Foundation\Http\FormRequest;

class SearchRequst extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return TRUE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'search_key' => ['required'],
            'model_name' => ['required']
        ];
    }
}
