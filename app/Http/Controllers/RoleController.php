<?php

namespace App\Http\Controllers;

use App\Http\Requests\InsererRoleRequest;
use App\Http\Requests\ModifierRoleRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class RoleController extends Controller
{
    public function listeRole()
    {
        $roles = DB::table("roles")->orderBy("created_at", "desc")->get();
        return view("roles", compact("roles"));
    }

    public function formulaireAjouterRole()
    {
        return view("role_ajouter");
    }

    public function ajouterRole(InsererRoleRequest $request)
    {

        try {
            DB::table("roles")->insert([
                "libelle_role" => $request->input("libelle_role"),
                "description_role" => $request->input("description_role"),
                "created_at" => now(),
                "updated_at" => now(),
            ]);
            Session::flash("message", "Le role a bien été ajouté.");
            return redirect()->route("liste_roles");
        }catch (\Exception $e){
            return redirect()->back();
        }
    }

    public function formulaireModifierRole($id)
    {
        $role = DB::table("roles")->where("id", $id)->first();
        return view("role_modifier", compact("role"));
    }

    public function modifierRole(ModifierRoleRequest $request)
    {
        try {
            DB::table("roles")->where("id", decrypt($request->id))->update([
                "libelle_role" => $request->libelle_role,
                "description_role" => $request->description_role,
                "updated_at" => now(),
            ]);
            Session::flash("message", "Le role a bien été modifié.");
            return redirect()->route("liste_roles");
        }catch (\Exception $e){
            return redirect()->back();
        }
    }

    public function supprimerRole($id)
    {
        try {
            DB::table("roles")->where("id", decrypt($id))->delete();
            Session::flash("message", "Le role a bien été supprimé.");
            return redirect()->route("liste_roles");
        }catch (\Exception $e){
            return redirect()->back();
        }
    }
}
