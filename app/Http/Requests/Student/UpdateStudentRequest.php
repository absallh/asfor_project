<?php

namespace App\Http\Requests\Student;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

/**
 * @property mixed id
 * @property mixed student
 */
class UpdateStudentRequest extends FormRequest
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
            //'id' => ['required', Rule::unique('students')->ignore($this->student->id)],
            'first_name' => ['required', 'max:255'],
            'father_name' => ['required', 'min:6', 'max:255'],
            'mother_name' => ['min:6', 'max:255'],
            'address' => ['min:6'],
            'personuid' => [Rule::unique('students')->ignore($this->student->id), 'max:14', 'min:6'],
            'apply_date' => ['date'],
            'call_date' => ['date'],
            'call_ruslt' => ['max:255'],
            'test_date' => ['date'],
            'test_ruslt' => ['max:255'],
            'join_date' => ['date'],
            'leave_at' => ['date']
        ];
    }
}
