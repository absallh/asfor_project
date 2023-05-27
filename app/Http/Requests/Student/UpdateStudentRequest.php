<?php

namespace App\Http\Requests\Student;

use Illuminate\Contracts\Validation\Validator;
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
            'first_name' => ['required', 'max:255'],
            'father_name' => ['required', 'min:6', 'max:255'],
            'mother_name' => ['nullable','min:6', 'max:255'],
            'address' => ['nullable', 'min:6'],
            'personuid' => ['required', Rule::unique('students')->ignore($this->student->id), 'max:14', 'min:14'],
            'apply_date' => ['nullable', 'date'],
            'call_date' => ['nullable', 'date'],
            'call_ruslt' => ['nullable', 'max:255'],
            'test_date' => ['nullable', 'date'],
            'test_ruslt' => ['max:255'],
            'join_date' => ['nullable', 'date'],
            'leave_at' => ['nullable', 'date'],
            'description' => ['nullable', 'string'],
            'education_type' => ['nullable', 'string'],
            'student_job' => ['nullable', 'string'],
            'school' => ['nullable', 'string'],
            'school_level' => ['nullable', 'string'],
            'parents_status' => ['nullable', 'string'],
            'father_job' => ['nullable', 'string'],
            'mother_job' => ['nullable', 'string'],
        ];
    }
    // function messages()
    // {
    //     return[
    //         ""=>$this->rules()
    //     ];
    // }

    protected function failedValidation(Validator $validator)
    {
        return $validator;
    //     alert('Oops', 'Please try again', 'error');
    //    redirect('Manage.pages.Students.modals.UpdateStudentModal')->with("student",$this->student)->withErrors($validator);

    }
}

