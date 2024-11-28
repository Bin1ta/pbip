<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateSubDivisionDocumentRequest extends FormRequest
{

    public function authorize()
    {
        return \Gate::allows('subDivision_document_edit');
    }

    public function rules()
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
