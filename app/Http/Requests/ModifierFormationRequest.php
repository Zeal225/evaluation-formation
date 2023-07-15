<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModifierFormationRequest extends FormRequest
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
            "theme_formation" => "required|min:3|max:255",
            "date_debut" => "required|date|before:date_fin",
            "heure_debut" => "required|date_format:H:i",
            "date_fin" => "required|date|after:date_debut",
            "heure_fin" => "required|date_format:H:i",
            "lieu_formation" => "required|min:3|max:255",
            "id_formateur" => "required",
            "id_utilisateur" => "required|array|min:1",
            ];
    }

    public function messages()
    {
        return [
            "theme_formation.required" => "Le thème de la formation est obligatoire",
            "theme_formation.min" => "Le thème de la formation doit contenir au moins :min caractères",
            "theme_formation.max" => "Le thème de la formation doit contenir au plus :max caractères",
            "date_debut.required" => "La date de début de la formation est obligatoire",
            "date_debut.date" => "La date de début de la formation doit être une date valide",
            "date_debut.before" => "La date de début de la formation doit être inférieure à la date de fin de la formation",
            "heure_debut.required" => "L'heure de début de la formation est obligatoire",
            "heure_debut.date_format" => "L'heure de début de la formation doit être une heure valide",
            "date_fin.required" => "La date de fin de la formation est obligatoire",
            "date_fin.date" => "La date de fin de la formation doit être une date valide",
            "date_fin.after" => "La date de fin de la formation doit être supérieure à la date de début de la formation",
            "heure_fin.required" => "L'heure de fin de la formation est obligatoire",
            "heure_fin.date_format" => "L'heure de fin de la formation doit être une heure valide",
            "lieu_formation.required" => "Le lieu de la formation est obligatoire",
            "lieu_formation.min" => "Le lieu de la formation doit contenir au moins :min caractères",
            "lieu_formation.max" => "Le lieu de la formation doit contenir au plus :max caractères",
            "id_formateur.required" => "Le formateur est obligatoire",
            "id_utilisateur.required" => "Le participant est obligatoire",
            "id_utilisateur.array" => "Le participant doit être un tableau",
            "id_utilisateur.min" => "Le participant doit contenir au moins :min élément"
        ];
    }
}
