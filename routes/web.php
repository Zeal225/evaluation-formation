<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::middleware(['rediriger_si_utilisateur_connecte'])->group(function () {
    Route::post("/formation/add", "App\Http\Controllers\FormationController@InsererFormation")->name("inserer_formation");

    Route::get('/formation/add', function () {
        return view('formation_ajouter');
    })->name("formation_ajouter");

    Route::get("/formation","App\Http\Controllers\FormationController@listeFormation")->name("liste_formations");
    Route::get("/formation/modifier/id/{id}","App\Http\Controllers\FormationController@modifierFormation")->name("modifier_formation");
    Route::post("/formation/modifier/id/{id}","App\Http\Controllers\FormationController@modifierFormationOk")->name("modifier_formation_ok");
    Route::get("/formation/supprimer/id/{id}","App\Http\Controllers\FormationController@supprimerFormation")->name("supprimer_formation");

    Route::get('/signup', function () {
        return view('signup');
    });


    //utilisateur
    Route::get("/utilisateurs","App\Http\Controllers\UtilisateurController@listeutilisateur")->name("liste_utilisateurs");
    Route::get("/utilisateur/ajouter","App\Http\Controllers\UtilisateurController@formulaireAjouterUtilisateur")->name("formulaire_ajouter_utilisateurs");
    Route::post("/utilisateur/ajouter","App\Http\Controllers\UtilisateurController@ajouterUtilisateur")->name("ajouter_utilisateurs");
    Route::get("/utilisateur/modifier/{id}","App\Http\Controllers\UtilisateurController@formulaireModifierUtilisateur")->name("formulaire_modifier_utilisateurs");
    Route::post("/utilisateur/modifier","App\Http\Controllers\UtilisateurController@modifierUtilisateur")->name("modifier_utilisateurs");
    Route::get("/utilisateur/supprimer/{id}","App\Http\Controllers\UtilisateurController@supprimerUtilisateur")->name("supprimer_utilisateurs");

    //cabinet
    Route::get("/cabinets","App\Http\Controllers\CabinetController@listeCabinet")->name("liste_cabinets");
    Route::get("/cabinet/ajouter","App\Http\Controllers\CabinetController@formulaireAjouterCabinet")->name("formulaire_ajouter_cabinet");
    Route::post("/cabinet/ajouter","App\Http\Controllers\CabinetController@ajouterCabinet")->name("ajouter_cabinet");
    Route::get("/cabinet/modifier/{id}","App\Http\Controllers\CabinetController@formulaireModifierCabinet")->name("formulaire_modifier_cabinets");
    Route::post("/cabinet/modifier","App\Http\Controllers\CabinetController@modifierCabinet")->name("modifier_cabinet");
    Route::get("/cabinet/supprimer/{id}","App\Http\Controllers\CabinetController@supprimerCabinet")->name("supprimer_cabinets");


    //formateur
    Route::get("/formateurs","App\Http\Controllers\FormateurController@listeFormateur")->name("liste_formateurs");
    Route::get("/formateur/ajouter","App\Http\Controllers\FormateurController@formulaireAjouterFormateur")->name("formulaire_ajouter_formateur");
    Route::post("/formateur/ajouter","App\Http\Controllers\FormateurController@ajouterFormateur")->name("ajouter_formateur");
    Route::get("/formateur/modifier/{id}","App\Http\Controllers\FormateurController@formulaireModifierFormateur")->name("formulaire_modifier_formateur");
    Route::post("/formateur/modifier","App\Http\Controllers\FormateurController@modifierFormateur")->name("modifier_formateur");
    Route::get("/formateur/supprimer/{id}","App\Http\Controllers\FormateurController@supprimerFormateur")->name("supprimer_formateur");

    //objectif
    Route::get("/objectifs","App\Http\Controllers\ObjectifController@listeObjectif")->name("liste_objectifs");
    Route::get("/objectif/ajouter","App\Http\Controllers\ObjectifController@formulaireAjouterObjectif")->name("formulaire_ajouter_objectif");
    Route::post("/objectif/ajouter","App\Http\Controllers\ObjectifController@ajouterObjectif")->name("ajouter_objectif");
    Route::get("/objectif/modifier/{id}","App\Http\Controllers\ObjectifController@formulaireModifierObjectif")->name("formulaire_modifier_objectif");
    Route::post("/objectif/modifier","App\Http\Controllers\ObjectifController@modifierObjectif")->name("modifier_objectif");
    Route::get("/objectif/supprimer/{id}","App\Http\Controllers\ObjectifController@supprimerObjectif")->name("supprimer_objectif");

    //categorie appreciations
    Route::get("/categorieappreciations","App\Http\Controllers\CategorieAppreciationController@listeCategorie")->name("liste_categories");
    Route::get("/categorieappreciations/ajouter","App\Http\Controllers\CategorieAppreciationController@formulaireAjouterCategorie")->name("formulaire_ajouter_categorie");
    Route::post("/categorieappreciations/ajouter","App\Http\Controllers\CategorieAppreciationController@ajouterCategorie")->name("ajouter_categorie");
    Route::get("/categorieappreciations/modifier/{id}","App\Http\Controllers\CategorieAppreciationController@formulaireModifierCategorie")->name("formulaire_modifier_categorie");
    Route::post("/categorieappreciations/modifier","App\Http\Controllers\CategorieAppreciationController@modifierCategorie")->name("modifier_categorie");
    Route::get("/categorieappreciations/supprimer/{id}","App\Http\Controllers\CategorieAppreciationController@supprimerCategorie")->name("supprimer_categorie");


    Route::get('/utilisateurs/add', function () {
        return view('utilisateur_ajouter');
    });
    /*Route::get('/formateur', function () {
        return view('formateur');
    });*/
    /*Route::get('/objectif', function () {
        return view('objectif');
    });*/
    Route::get('/objectif/add', function () {
        return view('objectif_ajouter');
    });

});

Route::get('/connexion', "App\Http\Controllers\UtilisateurController@connexion")->name("connexion");


Route::post('/connexion', "App\Http\Controllers\UtilisateurController@connexionOk")->name("connexion_ok");
Route::post('/deconnexion', "App\Http\Controllers\UtilisateurController@deconnexion")->name("deconnexion");


























/*Route::get('/', function () {
    return redirect('/connexion');
});*/




