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
                                    <h4 class="card-title mb-0">Liste des particpants à la formation [ <b>{{ $formation->theme_formation }}</b> ]</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="customerList">
                                        <div class="row g-4 mb-3">
                                            <div class="col-sm-auto">
                                                <div>
                                                    <a href="{{ route("liste_formations") }}" class="btn btn-primary btn-sm">
                                                        Retour
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
                                                    <th class="col" data-sort="nom">Nom</th>
                                                    <th class="col" data-sort="prenom">Prénom</th>
                                                    <th class="col" data-sort="email">Email</th>
                                                    <th class="col" data-sort="telephone_utilisateur">Contact</th>
                                                    <th class="col" data-sort="agence_utilisateur">Agence</th>
                                                    <th class="col" data-sort="service_utilisateur">Service</th>
                                                    <th class="col" data-sort="fonction_utilisateur">Fonction</th>
                                                    <th class="col" data-sort="evaluation_chaud">Evaluation</th>
                                                </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                @foreach($liste_participants as $participant)
                                                <tr>
                                                    <td class="nom">
                                                        {{ $participant->nom_utilisateur }}
                                                    </td>
                                                    <td class="prenom">
                                                        {{ $participant->email }}
                                                    </td>
                                                    <td class="email">
                                                        {{ $participant->email }}
                                                    </td>
                                                    <td class="telephone_utilisateur">
                                                        {{ $participant->telephone_utilisateur }}
                                                    </td>
                                                    <td class="agence_utilisateur">
                                                        {{ $participant->agence_utilisateur }}
                                                    </td>
                                                    <td class="service_utilisateur">
                                                        {{ $participant->service_utilisateur }}
                                                    </td>
                                                    <td class="fonction_utilisateur">
                                                        {{ $participant->fonction_utilisateur }}
                                                    </td>
                                                    <td class="">
                                                        <a href="{{ route("ajouter_evaluation_formation_participant", ["id"=>$formation->id_formation, "pt"=>$participant->id_utilisateur]) }}" class="btn btn-warning btn-sm">
                                                            Evaluer à chaud
                                                        </a>
                                                        <a href="" class="btn btn-primary btn-sm">
                                                            Evaluer à froid
                                                        </a>
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
