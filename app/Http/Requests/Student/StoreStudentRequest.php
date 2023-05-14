<?php

namespace App\Http\Requests\Student;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'first_name' => ['required', 'max:255'],
            'father_name' => ['required', 'min:6', 'max:255'],
            'mother_name' => ['max:255'],
            'address' => ['max:255'],
            'personuid' => ['required', 'unique:students', 'min:14', 'max:14'],
            'apply_date' => ['date'],
            //'join_date' => ['date']
        ];
    }
}
