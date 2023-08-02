@extends('master.master')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Evaluation à chaud de [ {{ $user->name }} ]</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route("ajouter_evaluation_formation_participant_ok") }}" method="post">
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
                                    <label for="firstNameinput" class="form-label">Intitulé de la formation</label>
                                    <input type="text" readonly value="{{ $formation->theme_formation }}" class="form-control" id="firstNameinput">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="lastNameinput" class="form-label">Formateur</label>
                                    <input type="text" readonly value="{{ $formation->formateur->nom_formateur.' '.$formation->formateur->prenom_formateur }}" class="form-control" id="lastNameinput">
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
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="compnayNameinput" class="form-label">
                                        Lieu de formation
                                    </label>
                                    <input type="text" readonly value="{{ $formation_utilisateur->lieu_formation }}" class="form-control"  id="compnayNameinput">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="phonenumberInput" class="form-label">
                                        Cabinet de formation
                                    </label>
                                    <input type="text" readonly value="{{ $cabinet->nom_cabinet }}" class="form-control" id="phonenumberInput">
                                </div>
                            </div>
                            <hr>
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
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="citynameInput" class="form-label">Fonction</label>
                                    <input type="text" value="{{ $user->fonction_utilisateur }}" readonly class="form-control" id="citynameInput">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="citynameInput" class="form-label">Service</label>
                                    <input type="text" value="{{ $user->service_utilisateur }}" readonly class="form-control" id="citynameInput">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="citynameInput" class="form-label">Structure</label>
                                    <input type="text" readonly value="{{ $user->departement_utilisateur }}" class="form-control" placeholder="Enter your city" id="citynameInput">
                                </div>
                            </div>

                            @foreach($groupe_appreciations as $appreciation)
                                <hr>
                                <h5 class="text-warning">
                                    {{ $appreciation->libelle_categorie_appreciation }}
                                </h5>

                                @foreach($appreciation->appreciations as $libelle)
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <input readonly name="id_appreciation[]" value="{{ $libelle->libelle_appreciation }}" type="text" class="form-control" id="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <select name="appreciation[]" id="" class="form-control">
                                                    <option value="">Choississez une appréciation</option>
                                                    <option value="Très satisfaisant">Très satisfaisant</option>
                                                    <option value="Satisfaisant">Satisfaisant</option>
                                                    <option value="Peu satisfaisant">Peu satisfaisant</option>
                                                    <option value="Pas du tout satisfaisant">Pas du tout satisfaisant</option>
                                                </select>
                                            </div>
                                        </div>
                                @endforeach
                            @endforeach
                            <div class="col-lg-12">
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
