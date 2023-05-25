<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsererAppreciationRequest extends FormRequest
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
            "libelle_appreciation" => "required|min:3|max:255",
            "categorie_appreciation_id" => "required|numeric"
        ];
    }

    public function messages()
    {
        return [
            "libelle_appreciation.required" => "Le libellé de l'appréciation est obligatoire",
            "libelle_appreciation.min" => "Le libellé de l'appréciation doit contenir au moins 3 caractères",
            "libelle_appreciation.max" => "Le libellé de l'appréciation ne doit pas dépasser 255 caractères",
            "categorie_appreciation_id.required" => "La catégorie de l'appréciation est obligatoire",
            "categorie_appreciation_id.numeric" => "La catégorie de l'appréciation doit être un nombre"
        ];
    }
}
