<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModifierUtilisateurRequest extends FormRequest
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
            'matricule_utilisateur' => ['required', 'string', 'max:255'],
            'nom_utilisateur' => ['required', 'string', 'max:255'],
            'prenom_utilisateur' => ['required', 'string', 'max:255'],
            'departement_utilisateur' => ['required', 'string', 'max:255'],
            'service_utilisateur' => ['required', 'string', 'max:255'],
            'fonction_utilisateur' => ['required', 'string', 'max:255'],
            'login_utilisateur' => ['required', 'string', 'max:255'],
            'telephone_utilisateur' => ['required', 'string', 'max:255'],
            'agence_utilisateur' => ['required', 'string', 'max:255'],
            'type_compte_utilisateur' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'string', 'max:255'],
        ];
    }

    public function messages()
    {
        return [
            'matricule_utilisateur.required' => 'Le matricule est obligatoire',
            'nom_utilisateur.required' => 'Le nom est obligatoire',
            'prenom_utilisateur.required' => 'Le prénom est obligatoire',
            'departement_utilisateur.required' => 'Le département est obligatoire',
            'service_utilisateur.required' => 'Le service est obligatoire',
            'fonction_utilisateur.required' => 'La fonction est obligatoire',
            'login_utilisateur.required' => 'Le login est obligatoire',
            'telephone_utilisateur.required' => 'Le téléphone est obligatoire',
            'agence_utilisateur.required' => 'L\'agence est obligatoire',
            'type_compte_utilisateur.required' => 'Le type de compte est obligatoire',
            'email.required' => 'L\'email est obligatoire',
            'password.required' => 'Le mot de passe est obligatoire',
        ];
    }
}
