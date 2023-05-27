<?php

namespace App\Http\Controllers;

use App\Http\Requests\InsererUtilisateurRequest;
use App\Http\Requests\ModifierUtilisateurRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UtilisateurController extends Controller
{
    public function connexion(){
        return view('index');
    }

    public function connexionOk(Request $infos_connexion){
        $infosConnexionData = $infos_connexion->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($infosConnexionData)) {
            $infos_connexion->session()->regenerate();
            return redirect()->route("liste_formations");
        }
    }

    public function deconnexion(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('connexion');
    }

    public function listeutilisateur(){
        $utilisateurs = User::with('typeUtilisateur', 'role')->orderBy("created_at", "desc")->get();
        return view('utilisateurs', compact('utilisateurs'));
    }

    public function formulaireAjouterUtilisateur(){
        $typeUtilisateurs = DB::table('type_utlisateurs')->get();
        $roles = DB::table('roles')->get();
        return view('utilisateur_ajouter', compact('typeUtilisateurs', 'roles'));
    }

    public function ajouterUtilisateur(InsererUtilisateurRequest $request){
        $utilisateur  = new User();
        $utilisateur->matricule_utilisateur = $request->matricule_utilisateur;
        $utilisateur->name = $request->nom_utilisateur." ".$request->prenom_utilisateur;
        $utilisateur->nom_utilisateur = $request->nom_utilisateur;
        $utilisateur->prenom_utilisateur = $request->prenom_utilisateur;
        $utilisateur->departement_utilisateur = $request->departement_utilisateur;
        $utilisateur->service_utilisateur = $request->service_utilisateur;
        $utilisateur->fonction_utilisateur = $request->fonction_utilisateur;
        $utilisateur->login_utilisateur = $request->login_utilisateur;
        $utilisateur->telephone_utilisateur = $request->telephone_utilisateur;
        $utilisateur->agence_utilisateur = $request->agence_utilisateur;
        $utilisateur->id_type_utilisateur = $request->id_type_utilisateur;
        $utilisateur->id_role = $request->id_role;
        $utilisateur->password = Hash::make($request->password);
        $utilisateur->email = $request->email;
        try {
            $utilisateur->save();
            Session::flash('message', "Utilisateur ajouté avec succès.");
            return redirect()->route('liste_utilisateurs');
        }catch (\Exception $e){
           return redirect()->back();
        }
    }

    public function formulaireModifierUtilisateur($id){
        $utilisateur = User::find($id);
        $typeUtilisateurs = DB::table('type_utlisateurs')->get();
        $roles = DB::table('roles')->get();
        return view('utilisateur_modifier', compact('utilisateur', 'typeUtilisateurs', 'roles'));
    }

    public function modifierUtilisateur(ModifierUtilisateurRequest $request){
        $data = $request->only(
            'id',
            'matricule_utilisateur',
            'nom_utilisateur',
            'prenom_utilisateur',
            'departement_utilisateur',
            'service_utilisateur',
            'fonction_utilisateur',
            'login_utilisateur',
            'telephone_utilisateur',
            'agence_utilisateur',
            'type_compte_utilisateur',
            'email'
        );
        $utilisateur = User::find(decrypt($data['id']));
        $utilisateur->matricule_utilisateur = $data['matricule_utilisateur'];
        $utilisateur->name = $data['nom_utilisateur']." ".$data['prenom_utilisateur'];
        $utilisateur->nom_utilisateur = $data['nom_utilisateur'];
        $utilisateur->prenom_utilisateur = $data['prenom_utilisateur'];
        $utilisateur->departement_utilisateur = $data['departement_utilisateur'];
        $utilisateur->service_utilisateur = $data['service_utilisateur'];
        $utilisateur->fonction_utilisateur = $data['fonction_utilisateur'];
        $utilisateur->login_utilisateur = $data['login_utilisateur'];
        $utilisateur->telephone_utilisateur = $data['telephone_utilisateur'];
        $utilisateur->agence_utilisateur = $data['agence_utilisateur'];
        $utilisateur->type_compte_utilisateur = $data['type_compte_utilisateur'];
        $utilisateur->email = $data['email'];
        try {
            $utilisateur->save();
            Session::flash('message', "Utilisateur modifié avec succès.");
            return redirect()->route('liste_utilisateurs');
        }catch (\Exception $e){
            return redirect()->back();
        }
    }

    public function supprimerUtilisateur($id){
        $id = decrypt($id);
        $utilisateur = User::find($id);
        try {
            $utilisateur->delete();
            Session::flash('message', "Utilisateur supprimé avec succès.");
            return redirect()->route('liste_utilisateurs');
        }catch (\Exception $e){
            return redirect()->back();
        }
    }
}
