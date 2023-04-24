@extends('master.master')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Liste des utilisateurs</h4>
                    <div class="flex-shrink-0">
                        <a href="" class="btn btn-primary">Ajouter un utilisateur</a>
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
                            <td>Koffi</td>
                            <td>Narcisse</td>
                            <td>Finance</td>
                            <td>Comptabilité</td>
                            <td>
                                Agent comptable
                            </td>
                            <td>Agent</td>
                            <td>koffi.narcisse@example.com</td>
                            <td>koffi@narcisse</td>
                            <td>0749496794</td>
                            <td>
                                <a href="" class="btn btn-primary btn-sm">Modifier</a>
                                <a href="" class="btn btn-danger btn-sm">Supprimer</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>23456</td>
                            <td>Diallo</td>
                            <td>Aminata</td>
                            <td>Direction information</td>
                            <td>Systèmes d'information</td>
                            <td>Analyste programmeur</td>
                            <td>Agent</td>
                            <td>diallo.aminata@example.com</td>
                            <td>diallo@aminata</td>
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
                            <td>Finance</td>
                            <td>Trésorerie</td>
                            <td>Trésorier</td>
                            <td>Directeur</td>
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
                            <td>Toure</td>
                            <td>Aminata</td>
                            <td>Ressources Humaines</td>
                            <td>Gestion du personnel</td>
                            <td>Responsable RH</td>
                            <td>Directeur</td>
                            <td>toure.aminata@example.com</td>
                            <td>toure@aminata</td>
                            <td>0612345678</td>
                            <td>
                                <a href="" class="btn btn-primary btn-sm">Modifier</a>
                                <a href="" class="btn btn-danger btn-sm">Supprimer</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>45678</td>
                            <td>Jean Paul</td>
                            <td>Franck</td>
                            <td>Ressources Humaines</td>
                            <td>Gestion du personnel</td>
                            <td>Responsable RH</td>
                            <td>Agent</td>
                            <td>toure.aminata@example.com</td>
                            <td>toure@aminata</td>
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
