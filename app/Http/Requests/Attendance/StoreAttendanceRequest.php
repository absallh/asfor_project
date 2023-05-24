<?php

namespace App\Http\Requests\Attendance;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreAttendanceRequest extends FormRequest
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
            'date' => ['required', 'date'],
            // 'subject_id' => [
            //     'required',
            //     Rule::unique('attendances')->where(function ($query) {
            //         return $query->where('date', $this->date);
            //     })
            // ],
            'subject_id' => [
                'required',
                 Rule::unique('attendances')->where(function ($query) {
                     $query->where('subject_id', $this->subject_id)
                        ->where('date', $this->date);
                 })
            ],
    ];
    }
}
