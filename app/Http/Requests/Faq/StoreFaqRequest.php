<?php

namespace App\Http\Requests\Faq;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreFaqRequest extends FormRequest
{

    public function authorize(): bool
    {
        return Gate::allows('faq_create');
    }

    public function rules(): array
    {
        return [
            'question' => ['required', 'string'],
            'answer' => ['required', 'string'],
        ];
    }
}
