<?php

namespace App\Http\Controllers;

use App\Http\Requests\InsererFormationRequest;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function InsererFormation(InsererFormationRequest $formulaire_insertion_formation){
        $theme_formation = $formulaire_insertion_formation['theme_formation'];
        $nouvelle_formation = new \App\Models\Formation;
        $nouvelle_formation->theme_formation = $theme_formation;
        $nouvelle_formation->save();
        return redirect()->route("liste_formations");

    }

    public function listeFormation(){
        $liste_formations = \App\Models\Formation::orderBy("created_at", "desc")->get();
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
