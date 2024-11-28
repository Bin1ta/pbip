<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateSubDivisionRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => ['required'],
            'slug' => ['required', 'alpha_dash', Rule::unique('sub_divisions', 'slug')->withoutTrashed()->ignore($this->subDivision)],
            'email' => ['required', 'email'],
            'phone' => ['required'],
            'introduction' => ['nullable'],
            'map' => ['nullable', 'url'],
            'facebook' => ['nullable', 'url'],
        ];
    }
}
