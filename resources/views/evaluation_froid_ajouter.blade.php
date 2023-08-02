@extends('master.master')

@section('content')
    <div class="row">
        @if (Session::has('message'))
            <div class="alert alert-success alert-border-left alert-dismissible fade show" role="alert">
                <strong>{{ Session::get('message') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="col-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Evaluation à froid de [ {{ $user->name }} ]</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route("ajouter_evaluation_froid_formation_participant_ok") }}" method="post">
                        @csrf
                        <div>
                            <input name="id_formation" type="hidden" value="{{ $formation->id_formation }}">
                            <input name="id_formateur" type="hidden" value="{{ $formation->formateur->id }}">
                            <input name="id_formation_utilisateur" type="hidden" value="{{ $formation_utilisateur->id }}">
                            <input name="id_cabinet" type="hidden" value="{{ $cabinet->id }}">
                            <input name="id_utilisateur" type="hidden" value="{{ $user->id }}">
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="emailidInput" class="form-label">Nom</label>
                                    <input type="text" readonly value="{{ $user->nom_utilisateur }}" class="form-control" id="emailidInput">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="address1ControlTextarea" class="form-label">Prénoms</label>
                                    <input type="text" readonly value="{{ $user->prenom_utilisateur }}" class="form-control" id="address1ControlTextarea">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="citynameInput" class="form-label">Service</label>
                                    <input type="text" value="{{ $user->service_utilisateur }}" readonly class="form-control" id="citynameInput">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="citynameInput" class="form-label">Fonction</label>
                                    <input type="text" value="{{ $user->fonction_utilisateur }}" readonly class="form-control" id="citynameInput">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="firstNameinput" class="form-label">Intitulé de la formation</label>
                                    <input type="text" readonly value="{{ $formation->theme_formation }}" class="form-control" id="firstNameinput">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="compnayNameinput" class="form-label">
                                        Date début de la formation
                                    </label>
                                    <input type="text" readonly value="{{ $formation_utilisateur->date_debut }}" class="form-control"  id="compnayNameinput">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="compnayNameinput" class="form-label">
                                        Date fin de la formation
                                    </label>
                                    <input type="text" readonly value="{{ $formation_utilisateur->date_fin }}" class="form-control" id="compnayNameinput">
                                </div>
                            </div>


                                <hr>
                                <h5 class="text-warning text-center">
                                    EVALUATION DE L’EFFICACITE
                                </h5>
                            <p class="text-center">
                                Les résultats ci-dessus sont-ils atteints? (Cocher la case correspondant à votre appréciation: 3 (objectifs largement atteints)
                                ≥50%; 2 (objectifs atteints) = 50%; 1 (objectifs non atteints) ≤50%)
                            </p>

                                @foreach($objectifs as $libelle)
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <input name="id_objectifs[]" type="hidden" value="{{ $libelle->id }}">
                                            <input readonly name="" value="{{ $libelle->libelle_objectif }}" type="text" class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <select name="notes[]" id="" class="form-control">
                                                <option value="">Choississez une note</option>
                                                @for($i=1; $i<=3; $i++)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>
                                @endforeach
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="" class="form-label">
                                        Si les objectifs de la formation ne sont pas atteints, pourquoi ?:
                                    </label>
                                    <textarea name="" id="" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="" class="form-label">
                                        Les améliorations souhaitées:
                                    </label>
                                    <textarea name="" id="" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Enrégistrer</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
