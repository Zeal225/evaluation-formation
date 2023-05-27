<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsererRoleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "libelle_role" => "required|string|unique:roles,libelle_role",
            "description_role" => "required|string",
        ];
    }

    public function messages()
    {
        return [
            "libelle_role.required" => "Le libellé du role est obligatoire.",
            "libelle_role.string" => "Le libellé du role doit être une chaîne de caractères.",
            "libelle_role.unique" => "Le libellé du role doit être unique.",
            "description_role.required" => "La description du role est obligatoire.",
            "description_role.string" => "La description du role doit être une chaîne de caractères.",
        ];
    }
}
