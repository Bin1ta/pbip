<?php

namespace App\Http\Requests\Smugglig;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreSmugglingRequest extends FormRequest
{

    public function authorize(): bool
    {
        return Gate::allows('smuggling_create');
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable'],
            'files' => ['required', 'array'],
            'files.*' => ['image']
        ];
    }
}
