<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModifierCabinetRequest extends FormRequest
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
            "nom_cabinet" => "required|string|min:3|max:255",
            "adresse_cabinet" => "required|string|max:255|min:3",
        ];
    }

    public function messages()
    {
        return [
            "nom_cabinet.required" => "Le nom du cabinet est obligatoire",
            "nom_cabinet.string" => "Le nom du cabinet doit être une chaîne de caractères",
            "nom_cabinet.min" => "Le nom du cabinet doit contenir au moins 3 caractères",
            "nom_cabinet.max" => "Le nom du cabinet ne doit pas dépasser 255 caractères",
            "adresse_cabinet.required" => "L'adresse du cabinet est obligatoire",
            "adresse_cabinet.string" => "L'adresse du cabinet doit être une chaîne de caractères",
            "adresse_cabinet.min" => "L'adresse du cabinet doit contenir au moins 3 caractères",
            "adresse_cabinet.max" => "L'adresse du cabinet ne doit pas dépasser 255 caractères",
        ];
    }
}
