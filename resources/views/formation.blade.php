@extends('master.master')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Liste des formateurs</h4>
                    <div class="flex-shrink-0">
                        <a href="" class="btn btn-primary">Ajouter une formation</a>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Striped Rows -->
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Date de début</th>
                            <th scope="col">Date de fin</th>
                            <th scope="col">Lieu</th>
                            <th scope="col">Theme</th>
                            <th scope="col">Cabinet</th>
                            <th scope="col">Formateur</th>
                            <th scope="col">Participants</th>
                            <th scope="col">Objectifs</th>
                            <th scope="col">Statut</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>2023-04-18</td>
                            <td>2023-04-30</td>
                            <td>Salle de reunion 4</td>
                            <td>Développement personnel</td>
                            <td>Boost+ Formation</td>
                            <td>
                                Serge Tanoh
                            </td>
                            <td>
                                <a href="" class="btn btn-success btn-sm">Voir les participants</a>
                            </td>
                            <td>
                                <a href="" class="btn btn-primary btn-sm">Voir les objectifs</a>
                            </td>
                            <td>
                                <span class="badge rounded-pill badge-soft-warning">En cours</span>
                            </td>
                            <td>
                                <a href="" class="btn btn-primary btn-sm">Modifier</a>
                                <a href="" class="btn btn-danger btn-sm">Supprimer</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>2023-05-18</td>
                            <td>2023-05-26</td>
                            <td>Salle de reunion 4</td>
                            <td>Compétences interpersonnelles</td>
                            <td>Boost+ Formation</td>
                            <td>
                                Koffi Kouao
                            </td>
                            <td>
                                <a href="" class="btn btn-success btn-sm">Voir les participants</a>
                            </td>
                            <td>
                                <a href="" class="btn btn-primary btn-sm">Voir les objectifs</a>
                            </td>
                            <td>
                                <span class="badge rounded-pill badge-soft-warning">A venir</span>
                            </td>
                            <td>
                                <a href="" class="btn btn-primary btn-sm">Modifier</a>
                                <a href="" class="btn btn-danger btn-sm">Supprimer</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>2023-05-02</td>
                            <td>2023-05-20</td>
                            <td>Salle de reunion 4</td>
                            <td>Technologies de l'information</td>
                            <td>TIC Expert</td>
                            <td>
                                Jean Claude
                            </td>
                            <td>
                                <a href="" class="btn btn-success btn-sm">Voir les participants</a>
                            </td>
                            <td>
                                <a href="" class="btn btn-primary btn-sm">Voir les objectifs</a>
                            </td>
                            <td>
                                <span class="badge rounded-pill badge-soft-warning">A venir</span>
                            </td>
                            <td>
                                <a href="" class="btn btn-primary btn-sm">Modifier</a>
                                <a href="" class="btn btn-danger btn-sm">Supprimer</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>2023-06-02</td>
                            <td>2023-06-20</td>
                            <td>Salle de reunion 4</td>
                            <td>Compétences techniques spécifiques</td>
                            <td>TIC Expert</td>
                            <td>
                                Jean Claude
                            </td>
                            <td>
                                <a href="" class="btn btn-success btn-sm">Voir les participants</a>
                            </td>
                            <td>
                                <a href="" class="btn btn-primary btn-sm">Voir les objectifs</a>
                            </td>
                            <td>
                                <span class="badge rounded-pill badge-soft-warning">A venir</span>
                            </td>
                            <td>
                                <a href="" class="btn btn-primary btn-sm">Modifier</a>
                                <a href="" class="btn btn-danger btn-sm">Supprimer</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>2023-06-10</td>
                            <td>2023-06-20</td>
                            <td>Salle de reunion 4</td>
                            <td>Conformité et éthique </td>
                            <td>Africa Consulting</td>
                            <td>
                                Kone Kouao
                            </td>
                            <td>
                                <a href="" class="btn btn-success btn-sm">Voir les participants</a>
                            </td>
                            <td>
                                <a href="" class="btn btn-primary btn-sm">Voir les objectifs</a>
                            </td>
                            <td>
                                <span class="badge rounded-pill badge-soft-warning">A venir</span>
                            </td>
                            <td>
                                <a href="" class="btn btn-primary btn-sm">Modifier</a>
                                <a href="" class="btn btn-danger btn-sm">Supprimer</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    @endsection
