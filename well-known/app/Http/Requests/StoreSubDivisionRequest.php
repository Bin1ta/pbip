<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreSubDivisionRequest extends FormRequest
{

    public function authorize(): bool
    {
        return \Gate::allows('sub_division_create');
    }

    public function rules(): array
    {
        return [
            'title' => ['required'],
            'slug' => ['required', 'alpha_dash', Rule::unique('sub_divisions', 'slug')->withoutTrashed()],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'phone' => ['required'],
            'introduction' => ['nullable'],
            'map' => ['nullable', 'url'],
            'facebook' => ['nullable', 'url'],
        ];
    }
}
