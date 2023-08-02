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
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Evaluation à chaud de [ {{ $evaluationchaud->utilisateur->name }} ]</h4>
                </div>
                <div class="card-body">
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="firstNameinput" class="form-label">Intitulé de la formation</label>
                                    <input type="text" readonly value="{{ $evaluationchaud->formation->theme_formation }}" class="form-control" id="firstNameinput">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="lastNameinput" class="form-label">Formateur</label>
                                    <input type="text" readonly value="{{ $evaluationchaud->formateur->nom_formateur.' '.$evaluationchaud->formateur->prenom_formateur }}" class="form-control" id="lastNameinput">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="compnayNameinput" class="form-label">
                                        Date début de la formation
                                    </label>
                                    <input type="text" readonly value="{{ $evaluationchaud->formation_utilisateur->date_debut }}" class="form-control"  id="compnayNameinput">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="compnayNameinput" class="form-label">
                                        Date fin de la formation
                                    </label>
                                    <input type="text" readonly value="{{ $evaluationchaud->formation_utilisateur->date_fin }}" class="form-control" id="compnayNameinput">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="compnayNameinput" class="form-label">
                                        Lieu de formation
                                    </label>
                                    <input type="text" readonly value="{{ $evaluationchaud->formation_utilisateur->lieu_formation }}" class="form-control"  id="compnayNameinput">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="phonenumberInput" class="form-label">
                                        Cabinet de formation
                                    </label>
                                    <input type="text" readonly value="{{ $evaluationchaud->cabinet->nom_cabinet }}" class="form-control" id="phonenumberInput">
                                </div>
                            </div>
                            <hr>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="emailidInput" class="form-label">Nom</label>
                                    <input type="text" readonly value="{{ $evaluationchaud->utilisateur->nom_utilisateur }}" class="form-control" id="emailidInput">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="address1ControlTextarea" class="form-label">Prénoms</label>
                                    <input type="text" readonly value="{{ $evaluationchaud->utilisateur->prenom_utilisateur }}" class="form-control" id="address1ControlTextarea">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="citynameInput" class="form-label">Fonction</label>
                                    <input type="text" value="{{ $evaluationchaud->utilisateur->fonction_utilisateur }}" readonly class="form-control" id="citynameInput">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="citynameInput" class="form-label">Service</label>
                                    <input type="text" value="{{ $evaluationchaud->utilisateur->service_utilisateur }}" readonly class="form-control" id="citynameInput">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="citynameInput" class="form-label">Structure</label>
                                    <input type="text" readonly value="{{ $evaluationchaud->utilisateur->departement_utilisateur }}" class="form-control" placeholder="Enter your city" id="citynameInput">
                                </div>
                            </div>

                            @foreach($evaluations as $libelle)
                                <div class="col-6">
                                    <div class="mb-3">
                                        <input readonly value="{{ $libelle->appreciation }}" type="text" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <input readonly value="{{ $libelle->evaluation }}" type="text" class="form-control" id="">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
