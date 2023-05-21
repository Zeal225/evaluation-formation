<?php

namespace App\Http\Controllers;

use App\Http\Requests\InsererObjectifRequest;
use App\Http\Requests\ModifierObjectifRequest;
use App\Models\Objectif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ObjectifController extends Controller
{
    public function listeObjectif()
    {
        $objectifs = Objectif::orderBy("created_at", "desc")->get();
        return view("objectifs", compact("objectifs"));
    }

    public function formulaireAjouterObjectif()
    {
        return view("objectif_ajouter");
    }

    public function ajouterObjectif(InsererObjectifRequest $request){
        $objectif = new Objectif();
        $objectif->libelle_objectif = $request->libelle_objectif;
        $objectif->note_objectif = $request->note_objectif;
        try {
            $objectif->save();
            Session::flash("message", "Objectif ajouté avec succès");
            return redirect()->route("liste_objectifs");
        }catch (\Exception $e){
            return redirect()->back();
        }
    }

    public function formulaireModifierObjectif($id){
        $objectif = Objectif::find($id);
        return view("objectif_modifier", compact("objectif"));
    }

    public function modifierObjectif(ModifierObjectifRequest $request){
        $objectif = Objectif::find(decrypt($request->id));
        $objectif->libelle_objectif = $request->libelle_objectif;
        $objectif->note_objectif = $request->note_objectif;
        try {
            $objectif->save();
            Session::flash("message", "Objectif modifié avec succès");
            return redirect()->route("liste_objectifs");
        }catch (\Exception $e){
            return redirect()->back();
        }
    }

    public function supprimerObjectif($id){
        $objectif = Objectif::find(decrypt($id));
        try {
            $objectif->delete();
            Session::flash("message", "Objectif supprimé avec succès");
            return redirect()->route("liste_objectifs");
        }catch (\Exception $e){
            return redirect()->back();
        }
    }
}
