<?php

namespace App\Http\Controllers;

use App\Http\Requests\InsererFormationRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FormationController extends Controller
{
    public function formulaireInsererFormation(){
        $formateurs = \App\Models\Formateur::with('cabinet')->orderBy("created_at", "desc")->get();
        $utilisateurs = User::with('typeUtilisateur', 'role')->where("id_role", "!=", null)->orderBy("created_at", "desc")->get();

        return view('formation_ajouter', compact("formateurs", "utilisateurs"));
    }
    public function InsererFormation(InsererFormationRequest $formulaire_insertion_formation){
        try {
            $theme_formation = $formulaire_insertion_formation['theme_formation'];
            $nouvelle_formation = new \App\Models\Formation;
            $nouvelle_formation->id_formateur = $formulaire_insertion_formation['id_formateur'];
            $nouvelle_formation->theme_formation = $theme_formation;
            $nouvelle_formation->save();


            foreach ($formulaire_insertion_formation['id_utilisateur'] as $id_utilisateur) {
                $formation_utilisateur = new \App\Models\FormationUtilisateur;
                $formation_utilisateur->id_utilisateur = $id_utilisateur;
                $formation_utilisateur->id_formation = $nouvelle_formation->id_formation;
                $formation_utilisateur->date_debut = $formulaire_insertion_formation['date_debut'];
                $formation_utilisateur->date_fin = $formulaire_insertion_formation['date_fin'];
                $formation_utilisateur->heure_debut = $formulaire_insertion_formation['heure_debut'];
                $formation_utilisateur->heure_fin = $formulaire_insertion_formation['heure_fin'];
                $formation_utilisateur->lieu_formation = $formulaire_insertion_formation['lieu_formation'];
                $formation_utilisateur->save();
            }
            Session::flash("message", "Formation ajoutée avec succès");
            return redirect()->route("liste_formations");
        }catch (\Exception $e){
            return redirect()->route("liste_formations");
        }

    }

    public function listeFormation(){
        //$liste_formations = \App\Models\Formation::orderBy("created_at", "desc")->get();
        $liste_formations = \App\Models\Formation::with('formateur', 'formation_utilisateur')->orderBy("created_at", "desc")->get();
        return view("formation", compact("liste_formations"));
    }

    public function modifierFormation($id){
        $formation  = \App\Models\Formation::find($id);
        return view("modifier_formation", compact("formation"));
    }

    public function modifierFormationOk(InsererFormationRequest $formulaire_modification_formation, $id){
        $formation  = \App\Models\Formation::find($id);
        $formation->theme_formation = $formulaire_modification_formation['theme_formation'];
        $formation->save();
        return redirect()->route("liste_formations");
    }

    public function supprimerFormation($id){
        $formation  = \App\Models\Formation::find($id);
        $formation->delete();
        return redirect()->route("liste_formations");

    }
}
