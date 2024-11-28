<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSubDivisionEmployeeRequest extends FormRequest
{

    public function authorize()
    {
        return \Gate::allows('subDivision_employee_edit');
    }

    public function rules()
    {
        return [
            'name' => ['required'],
            'photo' => ['nullable', 'image'],
            'department' => ['nullable'],
            'designation' => ['required'],
            'level' => ['nullable'],
            'phone' => ['nullable'],
            'email' => ['nullable'],
            'address' => ['nullable'],
            'position' => ['nullable', 'integer'],
            'is_chief' => ['nullable', 'boolean'],
        ];
    }
}
