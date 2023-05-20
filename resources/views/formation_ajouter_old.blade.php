@extends('master.master')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Ajouter une nouvelle formation</h4>
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="id_utilisateur" class="form-label">Date de début</label>
                            </div>
                            <div class="col-lg-9">
                                <div>
                                    <input type="date" class="form-control" id="exampleInputdate">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="matricule_utilisateur" class="form-label">Date de fin</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="date" class="form-control" id="exampleInputdate">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="nom_utilisateur" class="form-label">Thème de la formation</label>
                            </div>
                            <div class="col-lg-9">
                                <textarea class="form-control" id="exampleFormControlTextarea5" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="departement_utilisateur" class="form-label">Lieu formation</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" placeholder="Entrer le lieu de la formation">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="departement_utilisateur" class="form-label">Cabinet formateur</label>
                            </div>
                            <div class="col-lg-9">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Sélectionner un cabinet</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="departement_utilisateur" class="form-label">Formateur</label>
                            </div>
                            <div class="col-lg-9">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Sélectionner un formateur</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="departement_utilisateur" class="form-label">Participants</label>
                            </div>
                            <div class="col-lg-9">
                                <select class="form-control" id="choices-multiple-remove-button" data-choices data-choices-removeItem name="choices-multiple-remove-button" multiple>
                                    <option value="Choice 1">Alimatou</option>
                                    <option value="Choice 2">Mauricette</option>
                                    <option value="Choice 3">Jean philipe</option>
                                    <option value="Choice 4">Brice Koffi</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="departement_utilisateur" class="form-label">Objectifs</label>
                            </div>
                            <div class="col-lg-9">
                                <select class="form-control" id="choices-multiple-remove-button" data-choices data-choices-removeItem name="choices-multiple-remove-button" multiple>
                                    <option value="Choice 1">Objectif 1</option>
                                    <option value="Choice 2">Objectif 2</option>
                                    <option value="Choice 3">Objectif 5</option>
                                    <option value="Choice 4">Objectif 5</option>
                                </select>
                            </div>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Enrégistrer la formation</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
