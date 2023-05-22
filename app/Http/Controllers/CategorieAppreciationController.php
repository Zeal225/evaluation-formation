<?php

namespace App\Http\Controllers;

use App\Http\Requests\InsererCategorieRequest;
use App\Models\CategorieAppreciation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CategorieAppreciationController extends Controller
{
    public function listeCategorie()
    {
        $categories = DB::table("categorie_appreciations")->orderBy("created_at", "desc")->get();
        return view("categorieappreciations", compact("categories"));
    }

    public function formulaireAjouterCategorie()
    {
        return view("categorieappreciatation_ajouter");
    }


    public function ajouterCategorie(InsererCategorieRequest $request){

        $categorie  = new CategorieAppreciation();
        $categorie->libelle_categorie_appreciation = $request->libelle_categorie_appreciation;
        try {
            $categorie->save();
            Session::flash("message", "La catégorie a bien été ajoutée");
            return redirect()->route("liste_categories");
        }catch (\Exception $e){
            return redirect()->route("liste_categories")->with("error", $e->getMessage());
        }
    }

    public function formulaireModifierCategorie($id)
    {
        $categorie = CategorieAppreciation::find($id);
        return view("categorieappreciation_modifier", compact("categorie"));
    }

    public function modifierCategorie(Request $request)
    {
        $categorie = CategorieAppreciation::find(decrypt($request->id));
        $categorie->libelle_categorie_appreciation = $request->libelle_categorie_appreciation;
        try {
            $categorie->save();
            Session::flash("message", "La catégorie a bien été modifiée");
            return redirect()->route("liste_categories");
        }catch (\Exception $e){
            return redirect()->back();
        }
    }

    public function supprimerCategorie($id)
    {
        $categorie = CategorieAppreciation::find(decrypt($id));
        try {
            $categorie->delete();
            Session::flash("message", "La catégorie a bien été supprimée");
            return redirect()->route("liste_categories");
        }catch (\Exception $e){
            return redirect()->back();
        }
    }
}
