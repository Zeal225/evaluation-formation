<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsererFormationRequest extends FormRequest
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
            "theme_formation" => "required|min:3|max:255"
        ];
    }

    public function messages()
    {
        return [
            "theme_formation.required" => "Le thème de la formation est obligatoire",
            "theme_formation.min" => "Le thème de la formation doit contenir au moins 3 caractères",
            "theme_formation.max" => "Le thème de la formation ne doit pas dépasser 255 caractères"
        ];
    }
}
