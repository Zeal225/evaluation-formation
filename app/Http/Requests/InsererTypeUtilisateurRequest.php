<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsererTypeUtilisateurRequest extends FormRequest
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
            "libelle_type_utilisateur" => "required|string|max:255|unique:type_utlisateurs,libelle_type_utilisateur"
        ];
    }

    public function messages()
    {
        return [
            "libelle_type_utilisateur.required" => "Le libellé du type d'utilisateur est obligatoire",
            "libelle_type_utilisateur.string" => "Le libellé du type d'utilisateur doit être une chaîne de caractères",
            "libelle_type_utilisateur.max" => "Le libellé du type d'utilisateur ne doit pas dépasser 255 caractères",
            "libelle_type_utilisateur.unique" => "Le libellé du type d'utilisateur doit être unique"
        ];
    }
}
