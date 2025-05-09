<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProjectRequest extends FormRequest
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
        'name' => [
                'sometimes', 'min:3', 'max:100',
                Rule::unique('proyectos', 'name')->ignore($this->proyecto)
        ],
                'description' => 'nullable|string',
                'status' => ['sometimes', Rule::in(['active', 'inactive'])],
        ];
    }
}
