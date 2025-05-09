<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreTasktRequest extends FormRequest
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
            'project_id' => 'required|exist:proyectos,id',
            'title' => 'required|string|min:3|max:100',
            'description' => 'nullable|string',
            'status' => ['required', Rule::in('pending', 'in_progress', 'done')],
            'priority' => ['required', Rule::in(['low', 'medium', 'high'])],
            'due_date' => 'required|date',
        ];
    }
}
