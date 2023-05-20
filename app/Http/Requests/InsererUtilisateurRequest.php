<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsererUtilisateurRequest extends FormRequest
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
            'matricule_utilisateur' => ['required', 'string', 'max:255', 'unique:users'],
            'nom_utilisateur' => ['required', 'string', 'max:255'],
            'prenom_utilisateur' => ['required', 'string', 'max:255'],
            'departement_utilisateur' => ['required', 'string', 'max:255'],
            'service_utilisateur' => ['required', 'string', 'max:255'],
            'fonction_utilisateur' => ['required', 'string', 'max:255'],
            'login_utilisateur' => ['required', 'string', 'max:255', 'unique:users'],
            'telephone_utilisateur' => ['required', 'string', 'max:255', 'unique:users'],
            'agence_utilisateur' => ['required', 'string', 'max:255'],
            'type_compte_utilisateur' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'max:255'],
        ];
    }

    public function messages()
    {
        return [
            'matricule_utilisateur.required' => 'Le matricule est obligatoire',
            'matricule_utilisateur.unique' => 'Ce matricule existe déjà',
            'nom_utilisateur.required' => 'Le nom est obligatoire',
            'prenom_utilisateur.required' => 'Le prénom est obligatoire',
            'departement_utilisateur.required' => 'Le département est obligatoire',
            'service_utilisateur.required' => 'Le service est obligatoire',
            'fonction_utilisateur.required' => 'La fonction est obligatoire',
            'login_utilisateur.required' => 'Le login est obligatoire',
            'login_utilisateur.unique' => 'Ce login existe déjà',
            'telephone_utilisateur.required' => 'Le téléphone est obligatoire',
            'telephone_utilisateur.unique' => 'Ce téléphone existe déjà',
            'agence_utilisateur.required' => 'L\'agence est obligatoire',
            'type_compte_utilisateur.required' => 'Le type de compte est obligatoire',
            'email.required' => 'L\'email est obligatoire',
            'email.unique' => 'Cet email existe déjà',
            'password.required' => 'Le mot de passe est obligatoire',
            'password.max' => 'Le mot de passe ne doit pas dépasser 255 caractères',
        ];
    }
}
