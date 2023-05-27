<?php

namespace App\Http\Controllers;

use App\Http\Requests\InsererTypeUtilisateurRequest;
use App\Http\Requests\ModifierTypeUtilisateurRequest;
use App\Models\TypeUtilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class TypeUtilisateurController extends Controller
{
    public function listeTypeUtilisateur()
    {
        $typeUtilisateurs = TypeUtilisateur::orderBy("created_at", "desc")->get();
        return view("type_utilisateurs", compact("typeUtilisateurs"));
    }

    public function formulaireAjouterTypeUtilisateur()
    {
        return view("type_utilisateur_ajouter");
    }

    public function ajouterTypeUtilisateur(InsererTypeUtilisateurRequest $request)
    {
        $typeUtilisateur = new TypeUtilisateur();
        $typeUtilisateur->libelle_type_utilisateur = $request->libelle_type_utilisateur;
        try {
            $typeUtilisateur->save();
            Session::flash("message", "Type utilisateur ajouté avec succès !");
        }catch (\Exception $e){
            Session::flash("erreur", "Type utilisateur non ajouté !");
            Log::info($e->getMessage());
            return redirect()->back();
        }

        return redirect()->route("liste_type_utilisateurs");
    }

    public function formulaireModifierTypeUtilisateur($id)
    {
        $typeUtilisateur = TypeUtilisateur::find($id);
        return view("type_utilisateur_modifier", compact("typeUtilisateur"));
    }

    public function modifierTypeUtilisateur(ModifierTypeUtilisateurRequest $request)
    {
        $typeUtilisateur = TypeUtilisateur::find(decrypt($request->id));
        $typeUtilisateur->libelle_type_utilisateur = $request->libelle_type_utilisateur;
        try {
            $typeUtilisateur->save();
            Session::flash("message", "Type utilisateur modifié avec succès !");
        }catch (\Exception $e){
            Session::flash("erreur", "Type utilisateur non modifié !");
            Log::info($e->getMessage());
            return redirect()->back();
        }

        return redirect()->route("liste_type_utilisateurs");
    }

    public function supprimerTypeUtilisateur($id)
    {
        $typeUtilisateur = TypeUtilisateur::find(decrypt($id));
        try {
            $typeUtilisateur->delete();
            Session::flash("message", "Type utilisateur supprimé avec succès !");
        }catch (\Exception $e){
            Session::flash("erreur", "Type utilisateur non supprimé !");
            Log::info($e->getMessage());
            return redirect()->back();
        }

        return redirect()->route("liste_type_utilisateurs");
    }
}
