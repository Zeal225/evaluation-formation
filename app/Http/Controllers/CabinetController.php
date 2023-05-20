<?php

namespace App\Http\Controllers;

use App\Http\Requests\InsererCabinetRequest;
use App\Http\Requests\ModifierCabinetRequest;
use App\Models\Cabinet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CabinetController extends Controller
{

    public function listeCabinet(){
        $cabinets = DB::table('cabinets')->orderBy("created_at", "desc")->get();
        return view('cabinets', compact("cabinets"));
    }

    public function formulaireAjouterCabinet(){
        return view('cabinet_ajouter');
    }

    public function ajouterCabinet(InsererCabinetRequest $request){
        $cabinet = new Cabinet();
        $cabinet->nom_cabinet = $request->nom_cabinet;
        $cabinet->adresse_cabinet = $request->adresse_cabinet;
        try {
            $cabinet->save();
            Session::flash('message', "Cabinet ajouté avec succès");
            return redirect()->route("liste_cabinets");
        }catch (\Exception $e){
            return redirect()->back();
        }
    }

    public function formulaireModifierCabinet($id){
        $cabinet = Cabinet::find($id);
        return view('cabinet_modifier', compact('cabinet'));
    }

    public function modifierCabinet(ModifierCabinetRequest $request){
        $cabinet = Cabinet::find(decrypt($request->id));
        $cabinet->nom_cabinet = $request->nom_cabinet;
        $cabinet->adresse_cabinet = $request->adresse_cabinet;
        try {
            $cabinet->save();
            Session::flash('message', "Cabinet modifié avec succès");
            return redirect()->route("liste_cabinets");
        }catch (\Exception $e){
            return redirect()->back();
        }
    }

    public function supprimerCabinet($id){
        $cabinet = Cabinet::find(decrypt($id));
        try {
            $cabinet->delete();
            Session::flash('message', "Cabinet supprimé avec succès");
            return redirect()->route("liste_cabinets");
        }catch (\Exception $e){
            return redirect()->back();
        }
    }
}
