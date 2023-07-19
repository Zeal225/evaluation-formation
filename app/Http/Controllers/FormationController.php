<?php

namespace App\Http\Controllers;

use App\Http\Requests\InsererFormationRequest;
use App\Http\Requests\ModifierFormationRequest;
use App\Models\Cabinet;
use App\Models\CategorieAppreciation;
use App\Models\Formation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class FormationController extends Controller
{
    public function formulaireInsererFormation(){
        $formateurs = \App\Models\Formateur::with('cabinet')->orderBy("created_at", "desc")->get();
        $utilisateurs = User::with('typeUtilisateur', 'role')->where("id_role", "!=", null)->orderBy("created_at", "desc")->get();
        return view('formation_ajouter', compact("formateurs", "utilisateurs"));
    }
    public function InsererFormation(InsererFormationRequest $formulaire_insertion_formation){
        DB::beginTransaction();
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
            DB::commit();
            Session::flash("message", "Formation ajoutée avec succès");
            return redirect()->route("liste_formations");
        }catch (\Exception $e){
            DB::rollBack();
            return redirect()->route("liste_formations");
        }

    }

    public function listeFormation(){
        $liste_formations = \App\Models\Formation::with('formateur')
            ->join('formation_utilisateur', 'formations.id_formation', '=', 'formation_utilisateur.id_formation')->distinct('formations.id_formation')->orderBy("formations.id_formation", "desc")->get();
        return view("formation", compact("liste_formations"));
    }

    public function participantsFormation($id){
        $liste_participants = User::with('typeUtilisateur', 'role')
            ->join('formation_utilisateur', 'users.id', '=', 'formation_utilisateur.id_utilisateur')
            ->where('formation_utilisateur.id_formation', $id)->orderBy("users.id", "desc")->get();
        $formation = Formation::find($id);
        return view("formation_participants", compact("liste_participants", "formation"));
    }

    public function modifierFormation($id){
        $formation  = \App\Models\Formation::with('formateur')->find($id);
        $formation_utilisateur = \App\Models\FormationUtilisateur::where("id_formation", $id)->first();
        $formateurs = \App\Models\Formateur::with('cabinet')->orderBy("created_at", "desc")->get();
        $utilisateurs = User::with('typeUtilisateur', 'role')->where("id_role", "!=", null)->orderBy("created_at", "desc")->get();
        $participants = User::with('typeUtilisateur', 'role')
            ->join('formation_utilisateur', 'users.id', '=', 'formation_utilisateur.id_utilisateur')
            ->where('formation_utilisateur.id_formation', $id)->orderBy("users.id", "desc")->get();
        return view("modifier_formation", compact(
            "formation",
            "formateurs",
            "utilisateurs",
            "formation_utilisateur", "participants"));
    }

    public function modifierFormationOk(ModifierFormationRequest $formulaire_modification_formation, $id){
        DB::beginTransaction();
        try {
            $formation  = \App\Models\Formation::find($id);
            $data = $formulaire_modification_formation->all();
            $formation->update($data);
            $formation_utilisateurs = \App\Models\FormationUtilisateur::where("id_formation", $id)->get();
            foreach ($formation_utilisateurs as $formation_utilisateur){
                $formation_utilisateur->delete();
            }
            foreach ($formulaire_modification_formation['id_utilisateur'] as $id_utilisateur) {
                $formation_utilisateur = new \App\Models\FormationUtilisateur;
                $formation_utilisateur->id_utilisateur = $id_utilisateur;
                $formation_utilisateur->id_formation = $formation->id_formation;
                $formation_utilisateur->date_debut = $formulaire_modification_formation['date_debut'];
                $formation_utilisateur->date_fin = $formulaire_modification_formation['date_fin'];
                $formation_utilisateur->heure_debut = $formulaire_modification_formation['heure_debut'];
                $formation_utilisateur->heure_fin = $formulaire_modification_formation['heure_fin'];
                $formation_utilisateur->lieu_formation = $formulaire_modification_formation['lieu_formation'];
                $formation_utilisateur->save();
            }
            DB::commit();
            Session::flash("message", "Formation modifié avec succès");
            return redirect()->route("liste_formations");
        }catch (\Exception $e){
            DB::rollBack();
            return redirect()->route("liste_formations");
        }
    }

    public function supprimerFormation($id){
        $formation  = \App\Models\Formation::find($id);
        $formation->delete();
        return redirect()->route("liste_formations");

    }

    public function evaluationsFormation(){
        $liste_formations = \App\Models\Formation::with('formateur')
            ->join('formation_utilisateur', 'formations.id_formation', '=', 'formation_utilisateur.id_formation')->distinct('formations.id_formation')->orderBy("formations.id_formation", "desc")->get();
        return view("formation_evaluation", compact("liste_formations"));
    }

    public function evaluationsFormationParticipant($id){
        $liste_participants = User::with('typeUtilisateur', 'role')
            ->join('formation_utilisateur', 'users.id', '=', 'formation_utilisateur.id_utilisateur')
            ->where('formation_utilisateur.id_formation', $id)->orderBy("users.id", "desc")->get();
        $formation = Formation::find($id);
        return view("formation_participants_evaluation", compact("liste_participants", "formation"));
    }

    public function ajouterEvaluationsFormationParticipant($id, $id_utilisateur){
        $formation  = \App\Models\Formation::with('formateur')->find($id);
        $formation_utilisateur = \App\Models\FormationUtilisateur::where("id_formation", $id)->first();
        $user = User::with('typeUtilisateur', 'role')->find($id_utilisateur);
        $cabinet = Cabinet::find($formation->formateur->cabinet_id);
        $groupe_appreciations = CategorieAppreciation::with('appreciations')->get();
        return view("evaluation_chaud_ajouter", compact(
            "formation",
            "formation_utilisateur", "user", "cabinet", "groupe_appreciations"));
    }
}
