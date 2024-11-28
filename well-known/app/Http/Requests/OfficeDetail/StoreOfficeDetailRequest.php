<?php

namespace App\Http\Requests\OfficeDetail;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreOfficeDetailRequest extends FormRequest
{

    public function authorize(): bool
    {
        return Gate::allows('office_detail_create');
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'alpha_dash', Rule::unique('office_details', 'slug')->withoutTrashed()],
            'description' => ['required'],
            'type' => ['nullable', Rule::in(config('types')), Rule::unique('office_details', 'type')->withoutTrashed()],
            'position' => ['nullable', 'integer']
        ];
    }
}
