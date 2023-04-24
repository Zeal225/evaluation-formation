@extends('master.master')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Ajouter un nouvel utilisateur</h4>
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="id_utilisateur" class="form-label">ID Utilisateur</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="id_utilisateur" placeholder="Entrez l'ID de l'utilisateur">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="matricule_utilisateur" class="form-label">Matricule Utilisateur</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="matricule_utilisateur" placeholder="Entrez le matricule de l'utilisateur">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="nom_utilisateur" class="form-label">Nom Utilisateur</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="nom_utilisateur" placeholder="Entrez le nom de l'utilisateur">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="prenom_utilisateur" class="form-label">Prénom Utilisateur</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="prenom_utilisateur" placeholder="Entrez le prénom de l'utilisateur">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="departement_utilisateur" class="form-label">Département Utilisateur</label>
                            </div>
                            <div class="col-lg-9">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Sélectionner un département</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="service_utilisateur" class="form-label">Service Utilisateur</label>
                            </div>
                            <div class="col-lg-9">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Sélectionner un service</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="fonction_utilisateur" class="form-label">Fonction Utilisateur</label>
                            </div>
                            <div class="col-lg-9">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Sélectionner une fonction</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="fonction_utilisateur" class="form-label">Type de compte</label>
                            </div>
                            <div class="col-lg-9">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Sélectionner un type de compte</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="email_utilisateur" class="form-label">Email Utilisateur</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="email_utilisateur" placeholder="Entrez l'email de l'utilisateur">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="email_utilisateur" class="form-label">Login Utilisateur</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="login_utilisateur" placeholder="Entrez login de l'utilisateur">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="email_utilisateur" class="form-label">Téléphone Utilisateur</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="tel_utilisateur" placeholder="Entrez téléphone de l'utilisateur">
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Enrégistrer l'utilisateur</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection
