<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsererObjectifRequest extends FormRequest
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
            "libelle_objectif" => "required|string|max:255|unique:objectifs",
            "note_objectif" => "required|numeric|min:0|max:100",
        ];
    }

    public function messages()
    {
        return [
            "libelle_objectif.required" => "Le libellé de l'objectif est obligatoire",
            "libelle_objectif.string" => "Le libellé de l'objectif doit être une chaîne de caractères",
            "libelle_objectif.max" => "Le libellé de l'objectif ne doit pas dépasser 255 caractères",
            "libelle_objectif.unique" => "Le libellé de l'objectif doit être unique",
            "note_objectif.required" => "La note de l'objectif est obligatoire",
            "note_objectif.numeric" => "La note de l'objectif doit être un nombre",
            "note_objectif.min" => "La note de l'objectif doit être supérieure ou égale à 0",
            "note_objectif.max" => "La note de l'objectif doit être inférieure ou égale à 100",
        ];
    }
}
