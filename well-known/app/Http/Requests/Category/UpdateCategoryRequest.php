<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCategoryRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules():array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'alpha_dash', Rule::unique('document_categories', 'slug')->withoutTrashed()->ignore($this->category)],
            'position' => ['nullable', 'integer']
        ];
    }
}
