<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeatureRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'release_id' => ['required', 'string', 'exists:App\Models\Release,id'],
            'name' => ['required', 'min:3'],
            'description' => ['required', 'min:5'],
            'image' => ['required', 'url'],
            'video' => ['required', 'url'],
            'link' => ['required', 'url'],
        ];
    }
}
