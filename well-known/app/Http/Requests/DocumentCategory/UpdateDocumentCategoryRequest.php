<?php

namespace App\Http\Requests\DocumentCategory;

use App\Models\DocumentCategory;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateDocumentCategoryRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => ['required'],
            'position'=>['nullable'],
            'slug' => ['required', 'alpha_dash', Rule::unique('document_categories', 'slug')->withoutTrashed()->ignore($this->documentCategory)],
        ];
    }
}
