<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class UpdateSubDivisionDocumentCategoryRequest extends FormRequest
{

    public function authorize(): bool
    {
        return \Gate::allows('subDivision_document_category_edit');
    }

    #[ArrayShape(['title' => "string[]"])] public function rules(): array
    {
        return [
            'title' => ['required'],
        ];
    }
}
