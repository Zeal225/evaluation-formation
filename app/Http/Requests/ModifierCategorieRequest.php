<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModifierCategorieRequest extends FormRequest
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
            "libelle_categorie_appreciation" => "required|min:3|max:255|unique:categorie_appreciations,libelle_categorie_appreciation," . decrypt($this->id)
        ];
    }

    public function messages()
    {
        return [
            "libelle_categorie_appreciation.required" => "Le libellé de la catégorie est obligatoire",
            "libelle_categorie_appreciation.min" => "Le libellé de la catégorie doit avoir au moins 3 caractères",
            "libelle_categorie_appreciation.max" => "Le libellé de la catégorie ne doit pas dépasser 255 caractères",
            "libelle_categorie_appreciation.unique" => "Le libellé de la catégorie existe déjà"
        ];
    }
}
