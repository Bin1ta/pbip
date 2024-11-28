<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use JetBrains\PhpStorm\ArrayShape;

class StoreSubDivisionDocumentRequest extends FormRequest
{

    public function authorize(): bool
    {
        return \Gate::allows('subDivision_document_create');
    }

    #[ArrayShape(['title' => "string[]", 'sub_division_document_category_id' => "array", 'publisher' => "string[]", 'date' => "string[]", 'description' => "string[]", 'status' => "string[]", 'mark_as_new' => "string[]", 'files' => "string[]", 'files.*' => "string[]"])] public function rules(): array
    {
        return [
            'title' => ['required'],
            'sub_division_document_category_id' => ['required', Rule::exists('sub_division_document_categories', 'id')->withoutTrashed()],
            'publisher' => ['nullable'],
            'date' => ['required','date'],
            'description' => ['nullable'],
            'status' => ['nullable', 'boolean'],
            'mark_as_new' => ['nullable', 'boolean'],
            'files' => ['required', 'array'],
            'files.*' => ['file']
        ];
    }
}
