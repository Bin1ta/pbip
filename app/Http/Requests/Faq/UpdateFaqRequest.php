<?php

namespace App\Http\Requests\Faq;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class UpdateFaqRequest extends FormRequest
{

    public function authorize(): bool
    {
        return Gate::allows('faq_edit');
    }

    public function rules(): array
    {
        return [
            'question' => ['required', 'string'],
            'answer' => ['required', 'string'],
        ];
    }
}
