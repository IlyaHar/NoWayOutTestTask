<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReleaseRequest extends FormRequest
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
            'version' => ['required'],
            'name' => ['required', 'string', 'min:3'],
            'description' => ['required', 'min:5'],
            'text' => ['required', 'min:15'],
            'image' => ['required', 'url'],
            'video' => ['required', 'url'],
            'link' => ['required', 'url'],
            'is_protected' => ['sometimes', 'boolean'],
            'project_id' => ['required', 'exists:projects,id'],
        ];
    }
}
