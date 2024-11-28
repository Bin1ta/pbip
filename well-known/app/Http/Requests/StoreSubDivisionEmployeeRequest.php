<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSubDivisionEmployeeRequest extends FormRequest
{

    public function authorize()
    {
        return \Gate::allows('subDivision_employee_create');
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
            'is_chief' => ['required', 'boolean'],
        ];
    }
}
