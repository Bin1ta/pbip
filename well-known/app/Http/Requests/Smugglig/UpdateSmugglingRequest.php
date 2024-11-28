<?php

namespace App\Http\Requests\Smugglig;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class UpdateSmugglingRequest extends FormRequest
{

    public function authorize(): bool
    {
        return Gate::allows('smuggling_edit');
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable'],
            'files' => ['nullable', 'array'],
            'files.*' => ['image']
        ];
    }
}
