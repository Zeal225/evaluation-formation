@extends('master.master')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Liste des formateurs</h4>
                    <div class="flex-shrink-0">
                        <a href="" class="btn btn-primary">Ajouter un formateur</a>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Striped Rows -->
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Matricule</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prénom</th>
                            <th scope="col">Département</th>
                            <th scope="col">Service</th>
                            <th scope="col">Fonction</th>
                            <th scope="col">Type</th>
                            <th scope="col">Email</th>
                            <th scope="col">Login</th>
                            <th scope="col">Téléphone</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>12345</td>
                            <td>Serge</td>
                            <td>Tanoh</td>
                            <td>Externe</td>
                            <td>Externe</td>
                            <td>
                                Expert en gestion de projet
                            </td>
                            <td>Formateur</td>
                            <td>serge.tanoh@example.com</td>
                            <td>serge@tanoh</td>
                            <td>0749496794</td>
                            <td>
                                <a href="" class="btn btn-primary btn-sm">Modifier</a>
                                <a href="" class="btn btn-danger btn-sm">Supprimer</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>23456</td>
                            <td>Jean</td>
                            <td>Kouao</td>
                            <td>Externe</td>
                            <td>Externe</td>
                            <td>Expert Comptable</td>
                            <td>Formateur</td>
                            <td>jean.kouao@example.com</td>
                            <td>jean@kouao</td>
                            <td>0612345678</td>
                            <td>
                                <a href="" class="btn btn-primary btn-sm">Modifier</a>
                                <a href="" class="btn btn-danger btn-sm">Supprimer</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>34567</td>
                            <td>Diop</td>
                            <td>Alioune</td>
                            <td>Externe</td>
                            <td>Externe</td>
                            <td>Expert en gestion du temps</td>
                            <td>Formateur</td>
                            <td>diop.alioune@example.com</td>
                            <td>diop@alioune</td>
                            <td>0678901234</td>
                            <td>
                                <a href="" class="btn btn-primary btn-sm">Modifier</a>
                                <a href="" class="btn btn-danger btn-sm">Supprimer</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>45678</td>
                            <td>Kone</td>
                            <td>Habib</td>
                            <td>Externe</td>
                            <td>Externe</td>
                            <td>Expert gestion risque</td>
                            <td>Formateur</td>
                            <td>kone.habid@example.com</td>
                            <td>kone@habib</td>
                            <td>0612345678</td>
                            <td>
                                <a href="" class="btn btn-primary btn-sm">Modifier</a>
                                <a href="" class="btn btn-danger btn-sm">Supprimer</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>45678</td>
                            <td>Jean</td>
                            <td>Kobenan</td>
                            <td>Externe</td>
                            <td>Externe</td>
                            <td>Expert sécurité informatique</td>
                            <td>Formateur</td>
                            <td>jean.kobenan@example.com</td>
                            <td>jean@kobenan</td>
                            <td>0612345678</td>
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
