<?php

namespace App\Http\Requests\Employee;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateEmployeeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required'],
            'photo' => ['nullable', 'image'],
            'department_id' => ['nullable', Rule::exists('departments', 'id')->withoutTrashed()],
            'designation_id' => ['required', Rule::exists('designations', 'id')->withoutTrashed()],
            'level' => ['nullable'],
            'phone' => ['nullable'],
            'email' => ['nullable'],
            'address' => ['nullable'],
            'position' => ['nullable', 'integer'],
        ];
    }
}
