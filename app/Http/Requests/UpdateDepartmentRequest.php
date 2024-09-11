<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateDepartmentRequest extends FormRequest
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
        // Get the department being updated
        $departmentId = $this->route('department')->id;

        return [
            'name' => [
                'required',
                Rule::unique('departments', 'name')->ignore($departmentId), // Ignore the current department's name
            ],
            'code' => [
                'required',
                Rule::unique('departments', 'code')->ignore($departmentId), // Ignore the current department's code
            ],
        ];
    }
}
