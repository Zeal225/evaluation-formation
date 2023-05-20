@extends('master.master')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Liste des formations</h4>
                    <div class="flex-shrink-0">
                        <a href="{{ route("formation_ajouter") }}" class="btn btn-primary">Ajouter une formation</a>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Striped Rows -->
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Date de création</th>
                            <th scope="col">Theme</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($liste_formations as $liste_formation)
                        <tr>
                            <th scope="row">
                                {{ $liste_formation->id_formation }}
                            </th>
                            <td>
                                {{ $liste_formation->created_at }}
                            </td>
                            <td>
                                {{ $liste_formation->theme_formation }}
                            </td>
                            <td>
                                <a href="{{ route("modifier_formation", ["id"=>$liste_formation->id_formation]) }}" class="btn btn-primary btn-sm">Modifier</a>
                                <a href="{{ route("supprimer_formation", ["id"=>$liste_formation->id_formation]) }}" class="btn btn-danger btn-sm">Supprimer</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    @endsection
