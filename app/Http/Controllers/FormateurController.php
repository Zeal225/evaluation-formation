<?php

namespace App\Http\Controllers;

use App\Http\Requests\InsererFormateurRequest;
use App\Http\Requests\ModifierFormateurRequest;
use App\Models\Cabinet;
use App\Models\Formateur;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class FormateurController extends Controller
{
    public function listeFormateur()
    {
        $formateurs = Formateur::with("cabinet")->orderBy("created_at", "desc")->get();
        return view("formateurs", compact("formateurs"));
    }

    public function formulaireAjouterFormateur()
    {
        $cabinets = Cabinet::all();
        return view("formateur_ajouter", compact("cabinets"));
    }

    public function ajouterFormateur(InsererFormateurRequest $request)
    {
        DB::beginTransaction();
        $formateur = new Formateur();
        $formateur->nom_formateur = $request->nom_formateur;
        $formateur->prenom_formateur = $request->prenom_formateur;
        $formateur->email_formateur = $request->email_formateur;
        $formateur->tel_formateur = $request->tel_formateur;
        $formateur->specialite_formateur = $request->specialite_formateur;
        $formateur->cabinet_id = $request->cabinet_id;
        $formateur->password = Hash::make($request->password);
        //creer le formateur dans la table User
        $user = new User();
        $user->name = $request->nom_formateur." ".$request->prenom_formateur;
        $user->nom_utilisateur = $request->nom_formateur;
        $user->prenom_utilisateur = $request->prenom_formateur;
        $user->email = $request->email_formateur;
        $user->nom_utilisateur = $request->email_formateur;
        $user->email = $request->email_formateur;
        $user->password = Hash::make($request->password);
        $user->id_role = null;
        $user->id_type_utilisateur = null;
        $user->matricule_utilisateur = "FORMATEUR-".rand(1000, 9999).time();
        try {
            $formateur->save();
            $user->save();
            Session::flash("message", "Formateur ajouté avec succès");
            DB::commit();
            return redirect()->route("liste_formateurs");
        }catch (\Exception $e){
            Log::info($e->getMessage());
            DB::rollBack();
            return redirect()->back();
        }
    }

    public function formulaireModifierFormateur($id)
    {
        $formateur = Formateur::with("cabinet")->find($id);
        $cabinets = Cabinet::all();
        return view("formateur_modifier", compact("formateur", "cabinets"));
    }

    public function modifierFormateur(ModifierFormateurRequest $request){
        DB::beginTransaction();
        $formateur = Formateur::find(decrypt($request->id));
        $formateur->nom_formateur = $request->nom_formateur;
        $formateur->prenom_formateur = $request->prenom_formateur;
        $formateur->email_formateur = $request->email_formateur;
        $formateur->tel_formateur = $request->tel_formateur;
        $formateur->specialite_formateur = $request->specialite_formateur;
        $formateur->cabinet_id = $request->cabinet_id;
        $formateur->password = Hash::make($request->password);
        //creer le formateur dans la table User
        $user = User::where("email", $request->email_formateur)->first();
        if (!$user){
            $user = new User();
        }
        $user->name = $request->nom_formateur." ".$request->prenom_formateur;
        $user->nom_utilisateur = $request->nom_formateur;
        $user->prenom_utilisateur = $request->prenom_formateur;
        $user->email = $request->email_formateur;
        $user->nom_utilisateur = $request->email_formateur;
        $user->email = $request->email_formateur;
        $user->password = Hash::make($request->password);
        try {
            $formateur->save();
            $user->save();
            Session::flash("message", "Formateur modifié avec succès");
            DB::commit();
            return redirect()->route("liste_formateurs");
        }catch (\Exception $e){
            DB::rollBack();
            return redirect()->back();
        }
    }

    public function supprimerFormateur($id)
    {
        DB::beginTransaction();
        try {
            $formateur = Formateur::find(decrypt($id));
            $formateur->delete();
            $user = User::where("email", $formateur->email_formateur)->first();
            if ($user){
                $user->delete();
            }
            DB::commit();
            Session::flash("message", "Formateur supprimé avec succès");
            return redirect()->route("liste_formateurs");
        }catch (\Exception $e){
            DB::rollBack();
            Session::flash("message", "Erreur lors de la suppression du formateur");
            return redirect()->back();
        }
    }
}
