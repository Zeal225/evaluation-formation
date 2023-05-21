<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModifierFormateurRequest extends FormRequest
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
            "nom_formateur" => "required|min:3|max:50",
            "prenom_formateur" => "required|min:3|max:50",
            "email_formateur" => "required|email",
            "tel_formateur" => "required|min:8|max:15",
            "specialite_formateur" => "required|min:3|max:50",
            "cabinet_id" => "required|exists:cabinets,id",
            "password" => "required|min:3|max:50",
        ];
    }

    public function messages()
    {
        return [
            "nom_formateur.required" => "Le nom du formateur est obligatoire",
            "nom_formateur.min" => "Le nom du formateur doit avoir au moins 3 caractères",
            "nom_formateur.max" => "Le nom du formateur ne doit pas dépasser 50 caractères",
            "prenom_formateur.required" => "Le prénom du formateur est obligatoire",
            "prenom_formateur.min" => "Le prénom du formateur doit avoir au moins 3 caractères",
            "prenom_formateur.max" => "Le prénom du formateur ne doit pas dépasser 50 caractères",
            "email_formateur.required" => "L'email du formateur est obligatoire",
            "email_formateur.email" => "L'email du formateur doit être valide",
            "tel_formateur.required" => "Le téléphone du formateur est obligatoire",
            "tel_formateur.min" => "Le téléphone du formateur doit avoir au moins 8 caractères",
            "tel_formateur.max" => "Le téléphone du formateur ne doit pas dépasser 15 caractères",
            "specialite_formateur.required" => "La spécialité du formateur est obligatoire",
            "specialite_formateur.min" => "La spécialité du formateur doit avoir au moins 3 caractères",
            "specialite_formateur.max" => "La spécialité du formateur ne doit pas dépasser 50 caractères",
            "cabinet_id.required" => "Le cabinet du formateur est obligatoire",
            "cabinet_id.exists" => "Le cabinet du formateur doit être valide",
            "password.required" => "Le mot de passe du formateur est obligatoire",
            "password.min" => "Le mot de passe du formateur doit avoir au moins 3 caractères",
            "password.max" => "Le mot de passe du formateur ne doit pas dépasser 50 caractères",
        ];
    }
}
