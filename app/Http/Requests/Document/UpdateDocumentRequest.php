<?php

namespace App\Http\Requests\Document;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateDocumentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['required', 'string'],
            'slug' => ['required', 'alpha_dash', Rule::unique('documents', 'slug')->withoutTrashed()->ignore($this->document)],
            'publisher' => ['nullable', 'string'],
            'published_date' => ['required', 'date'],
            'description' => ['nullable'],
            'status' => ['nullable', 'boolean'],
            'mark_as_new' => ['nullable', 'boolean'],
            'document_category_id' => ['nullable', Rule::exists('document_categories', 'id')->withoutTrashed()],
            'files' => ['nullable', 'array'],
            'files.*' => ['file']
        ];
    }
}
