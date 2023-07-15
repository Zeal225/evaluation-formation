@extends('master.master')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                @if (Session::has('message'))
                    <div class="alert alert-success alert-border-left alert-dismissible fade show" role="alert">
                        <strong>{{ Session::get('message') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0"> Liste des formations</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="customerList">
                                        <div class="row g-4 mb-3">
                                            <div class="col-sm-auto">
                                                <div>
                                                    <a href="{{ route("formation_ajouter") }}" class="btn btn-primary btn-lg">
                                                        <i class="ri-add-line align-bottom me-1"></i>
                                                        Ajouter une formation
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="d-flex justify-content-sm-end">
                                                    <div class="search-box ms-2">
                                                        <input type="text" class="form-control search" placeholder="Recherche...">
                                                        <i class="ri-search-line search-icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="table-responsive table-card mt-3 mb-1">
                                            <table class="table align-middle table-nowrap" id="customerTable">
                                                <thead class="table-light">
                                                <tr>
                                                    <th class="sort" data-sort="id_formation">ID</th>
                                                    <th class="sort" data-sort="created_at">Date de création</th>
                                                    <th class="col" data-sort="lieu_formation">Lieu formation</th>
                                                    <th class="col" data-sort="theme_formation">Theme</th>
                                                    <th class="col" data-sort="nom_formateur">Formateur</th>
                                                    <th class="col" data-sort="specialite_formateur">Specialité</th>
                                                    <th class="col" data-sort="date_debut">Date début</th>
                                                    <th class="col" data-sort="date_fin">Date fin</th>
                                                    <th class="col" data-sort="statut">Etat formation</th>
                                                    <th class="col" data-sort="statut">Participants</th>
                                                    <th class="col" data-sort="action">Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                @foreach($liste_formations as $liste_formation)
                                                    <tr>
                                                        <th scope="row">
                                                            {{ $liste_formation->id_formation }}
                                                        </th>
                                                        <td>
                                                            {{ \Carbon\Carbon::parse($liste_formation->created_at)->format('d M, Y') }}
                                                        </td>
                                                        <td>
                                                            {{ $liste_formation->lieu_formation ?? '' }}
                                                        </td>
                                                        <td>
                                                            {{ $liste_formation->theme_formation }}
                                                        </td>
                                                        <td>
                                                            {{ $liste_formation->formateur->nom_formateur ?? '' }}
                                                            {{ $liste_formation->formateur->prenom_formateur ?? '' }}
                                                        </td>
                                                        <td>
                                                            {{ $liste_formation->formateur->specialite_formateur ?? '' }}
                                                        </td>
                                                        <td>
                                                            {{ \Carbon\Carbon::parse($liste_formation->date_debut)->format('d M, Y') }} à {{ \Carbon\Carbon::parse($liste_formation->heure_debut)->format('H:i') }}
                                                        </td>
                                                        <td>
                                                            {{ \Carbon\Carbon::parse($liste_formation->date_fin)->format('d M, Y') }} à {{ \Carbon\Carbon::parse($liste_formation->heure_fin)->format('H:i') }}
                                                        </td>
                                                        <td>
                                                            @if($liste_formation->date_debut > \Carbon\Carbon::now())
                                                                <span class="badge bg-soft-warning text-warning">En attente</span>
                                                            @elseif($liste_formation->date_fin > \Carbon\Carbon::now())
                                                                <span class="badge bg-soft-success text-success">En cours</span>
                                                            @elseif($liste_formation->date_fin < \Carbon\Carbon::now())
                                                                <span class="badge bg-soft-danger text-danger">Terminé</span>
                                                            @else
                                                                <span class="badge bg-soft-info text-info">En attente</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <a href="{{ route("participants_formation", ["id"=>$liste_formation->id_formation]) }}" class="btn btn-secondary btn-sm">Voir participants</a>
                                                        </td>
                                                        <td>
                                                            <a href="{{ route("modifier_formation", ["id"=>$liste_formation->id_formation]) }}" class="btn btn-primary btn-sm">Modifier</a>
                                                            <a href="{{ route("supprimer_formation", ["id"=>$liste_formation->id_formation]) }}" class="btn btn-danger btn-sm">Supprimer</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                            <div class="noresult" style="display: none">
                                                <div class="text-center">
                                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                                    <h5 class="mt-2">Désolé! Aucun résultat trouvé</h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-end">
                                            <div class="pagination-wrap hstack gap-2">
                                                <a class="page-item pagination-prev disabled" href="#">
                                                    Préc
                                                </a>
                                                <ul class="pagination listjs-pagination mb-0"></ul>
                                                <a class="page-item pagination-next" href="#">
                                                    Suiv
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end col -->
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
