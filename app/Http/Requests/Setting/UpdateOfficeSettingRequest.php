<?php

namespace App\Http\Requests\Setting;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateOfficeSettingRequest extends FormRequest
{

    public function authorize(): bool
    {
        return Gate::allows('office_setting_access');
    }

    public function rules(): array
    {
        return [
            'office_name' => ['required', 'string', 'max:255'],
            'office_phone' => ['nullable', 'string', 'max:255'],
            'office_email' => ['required', 'string', 'max:255'],
            'cover_photo' => ['nullable', 'image'],
            'office_address' => ['required', 'string', 'max:255'],
            'en_header' => ['nullable', 'image'],
            'ne_header' => ['nullable', 'image'],
            'chief_id' => ['nullable', Rule::exists('employees', 'id')->withoutTrashed()],
            'information_officer_id' => ['nullable', Rule::exists('employees', 'id')->withoutTrashed()],
            'map_iframe' => ['nullable', 'url'],
            'facebook_iframe' => ['nullable', 'url'],
            'twitter_iframe' => ['nullable', 'url'],
            'document_list_type' => ['required', Rule::in(['card', 'list'])]
        ];
    }
}
