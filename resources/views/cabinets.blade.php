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
                                    <h4 class="card-title mb-0"> Liste des cabinets de formations</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="customerList">
                                        <div class="row g-4 mb-3">
                                            <div class="col-sm-auto">
                                                <div>
                                                    <a href="{{ route("formulaire_ajouter_cabinet") }}" class="btn btn-primary btn-lg">
                                                        <i class="ri-add-line align-bottom me-1"></i>
                                                        Ajouter un cabinet
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
                                                    <th class="sort" data-sort="date">Date de création</th>
                                                    <th class="sort" data-sort="nom">Nom cabinet</th>
                                                    <th class="sort" data-sort="adresse">Adresse cabinet</th>
                                                    <th class="sort" data-sort="action">Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                @foreach($cabinets as $cabinet)
                                                <tr>
                                                    <td class="date">
                                                        {{ \Carbon\Carbon::parse($cabinet->created_at)->format('d M, Y') }}
                                                    </td>
                                                    <td class="matricule">
                                                        {{ $cabinet->nom_cabinet }}
                                                    </td>
                                                    <td class="nom">
                                                        {{ $cabinet->adresse_cabinet }}
                                                    </td>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <div class="edit">
                                                                <a href="{{ route("formulaire_modifier_cabinets", ["id"=>$cabinet->id]) }}" class="btn btn-soft-primary btn-sm"><i class="ri-pencil-line"></i></a>
                                                            </div>
                                                            <div class="remove">
                                                                <a href="{{ route("supprimer_cabinets", ["id"=>encrypt($cabinet->id)]) }}" class="btn btn-soft-danger btn-sm delete-cabinet" id="sa-basic"><i class="ri-delete-bin-2-line"></i></a>
                                                            </div>
                                                        </div>
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
