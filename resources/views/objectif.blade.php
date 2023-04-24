@extends('master.master')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Liste des objectifs de formations</h4>
                    <div class="flex-shrink-0">
                        <a href="" class="btn btn-primary">Ajouter un objectif</a>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Striped Rows -->
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Libellé</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                Développement des compétences techniques .
                            </td>
                            <td>
                                <a href="" class="btn btn-primary btn-sm">Modifier</a>
                                <a href="" class="btn btn-danger btn-sm">Supprimer</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>
                                Amélioration des compétences en leadership.
                            </td>

                            <td>
                                <a href="" class="btn btn-primary btn-sm">Modifier</a>
                                <a href="" class="btn btn-danger btn-sm">Supprimer</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>
                                Formation sur la sécurité.La sécurité est une préoccupation importante dans de nombreuses entreprises.
                            </td>

                            <td>
                                <a href="" class="btn btn-primary btn-sm">Modifier</a>
                                <a href="" class="btn btn-danger btn-sm">Supprimer</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>
                                Formation sur la diversité et l'inclusion.Une formation sur la diversité et l'inclusion
                            </td>

                            <td>
                                <a href="" class="btn btn-primary btn-sm">Modifier</a>
                                <a href="" class="btn btn-danger btn-sm">Supprimer</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>
                                Formation sur la gestion du temps et la productivité.
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
