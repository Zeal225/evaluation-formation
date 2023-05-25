<?php

namespace App\Http\Controllers;

use App\Http\Requests\InsererAppreciationRequest;
use App\Models\Appreciation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AppreciationController extends Controller
{
    public function listeAppreciation()
    {
        $appreciations = Appreciation::with("categorieAppreciation")->orderBy("created_at", "desc")->get();
        return view("appreciations", compact("appreciations"));
    }

    public function formulaireAjouterAppreciation()
    {
        $categories = DB::table("categorie_appreciations")->orderBy("created_at", "desc")->get();
        return view("appreciation_ajouter", compact("categories"));
    }

    public function ajouterAppreciation(InsererAppreciationRequest $request)
    {
        $appreciation = new Appreciation();
        $appreciation->libelle_appreciation = $request->libelle_appreciation;
        $appreciation->categorie_appreciation_id = $request->categorie_appreciation_id;
        try {
            $appreciation->save();
            Session::flash("message", "L'appréciation a bien été ajoutée");
            return redirect()->route("liste_appreciations");
        }catch (\Exception $e){
            return redirect()->back();
        }
    }

    public function formulaireModifierAppreciation($id)
    {
        $appreciation = Appreciation::with("categorieAppreciation")->find($id);
        $categories = DB::table("categorie_appreciations")->orderBy("created_at", "desc")->get();
        return view("appreciation_modifier", compact("appreciation", "categories"));
    }

    public function modifierAppreciation(InsererAppreciationRequest $request)
    {
        $appreciation = Appreciation::find(decrypt($request->id));
        $appreciation->libelle_appreciation = $request->libelle_appreciation;
        $appreciation->categorie_appreciation_id = $request->categorie_appreciation_id;
        try {
            $appreciation->save();
            Session::flash("message", "L'appréciation a bien été modifiée");
            return redirect()->route("liste_appreciations");
        }catch (\Exception $e){
            return redirect()->back();
        }
    }

    public function supprimerAppreciation($id)
    {
        $appreciation = Appreciation::find(decrypt($id));
        try {
            $appreciation->delete();
            Session::flash("message", "L'appréciation a bien été supprimée");
            return redirect()->route("liste_appreciations");
        }catch (\Exception $e){
            return redirect()->back();
        }
    }
}
