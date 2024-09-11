<?php

namespace App\Http\Requests;

use App\Traits\MethodTrait;
use Illuminate\Foundation\Http\FormRequest;

class LoginAdminRequest extends FormRequest
{
    use MethodTrait;
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
        $infofield = $this->CheckField($this);
        $field = $infofield['fields'];

        if ($field == "email") {
            return [
                "field" => "required|exists:admins,email",
                "password" => "required"
            ];
        } else {
            return [
                "field" => "required|exists:admins,username",
                "password" => "required"
            ];
        }

    }
}
