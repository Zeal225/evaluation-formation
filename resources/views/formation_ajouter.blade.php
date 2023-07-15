@extends('master.master')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Ajouter une nouvelle formation</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route("inserer_formation") }}" method="post">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="theme_formation" class="form-label">Thème de la formation</label>
                            </div>
                            <div class="col-lg-9">
                                <input name="theme_formation" value="{{ old("theme_formation") }}" class="form-control" id="theme_formation" placeholder="Entrez le thème de la formation">
                                @error('theme_formation')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="date_debut" class="form-label">Date début de la formation</label>
                            </div>
                            <div class="col-lg-9">
                                <div>
                                    <input value="{{ old("date_debut") }}" id="date_debut" name="date_debut" type="text" placeholder="Entrez la date de début" class="form-control" data-provider="flatpickr" data-date-format="d-M-Y">
                                    @error('date_debut')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="heure_debut" class="form-label">Heure début de la formation</label>
                            </div>
                            <div class="col-lg-9">
                                <div>
                                    <input id="heure_debut" value="{{ old("heure_debut") }}" name="heure_debut" type="text" placeholder="Entrez l'heure de début" class="form-control"  data-provider="timepickr" data-time-basic="true">
                                    @error('heure_debut')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="date_fin" class="form-label">Date fin de la formation</label>
                            </div>
                            <div class="col-lg-9">
                                <div>
                                    <input name="date_fin" value="{{ old("date_fin") }}" id="date_fin" type="text" placeholder="Entrez la date de fin" class="form-control" data-provider="flatpickr" data-date-format="d-M-Y">
                                    @error('date_fin')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="heure_fin" class="form-label">Heure fin de la formation</label>
                            </div>
                            <div class="col-lg-9">
                                <div>
                                    <input name="heure_fin" value="{{ old("heure_fin") }}" id="heure_fin" type="text" placeholder="Entrez l'heure de fin" class="form-control"  data-provider="timepickr" data-time-basic="true">
                                    @error('heure_fin')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="lieu_formation" class="form-label">Lieu de la formation</label>
                            </div>
                            <div class="col-lg-9">
                                <input name="lieu_formation" value="{{ old("lieu_formation") }}" class="form-control" id="lieu_formation" placeholder="Entrez le lieu de la formation">
                                @error('lieu_formation')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="id_formateur" class="form-label">Formateur</label>
                            </div>
                            <div class="col-lg-9">
                                <select name="id_formateur" id="id_formateur" class="form-select" aria-label="Default select example">
                                    <option value="">Sélectionnez un formateur</option>
                                    @foreach($formateurs as $formateur)
                                        <option @if($formateur->id == old("id_formateur")) selected @endif value="{{ $formateur->id }}">{{ $formateur->nom_formateur }} {{ $formateur->prenom_formateur }} - {{ $formateur->specialite_formateur }} - {{ $formateur->cabinet->nom_cabinet }}</option>
                                    @endforeach
                                </select>
                                @error('id_formateur')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="id_utilisateur" class="form-label">Participants</label>
                            </div>
                            <div class="col-lg-9">
                                <select class="form-control" id="id_utilisateur" data-choices data-choices-removeItem name="id_utilisateur[]" multiple>
                                    <option value="">Selectionez les participant</option>
                                   @foreach($utilisateurs as $utilisateur)
                                        <option @if(in_array($utilisateur->id, old("id_utilisateur", []))) selected @endif value="{{ $utilisateur->id }}">{{ $utilisateur->nom_utilisateur }} {{ $utilisateur->prenom_utilisateur }} </option>
                                    @endforeach
                                </select>
                                @error('id_utilisateur')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Enregistrer la formation</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
