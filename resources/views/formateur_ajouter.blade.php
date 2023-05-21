@extends('master.master')

@section('content')
    <!-- Toast -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Ajouter un nouveau formateur</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route("ajouter_formateur") }}" method="post">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="nom_formateur" class="form-label">Nom du formateur</label>
                            </div>
                            <div class="col-lg-9">
                                <input value="{{ old("nom_formateur") }}" type="text" name="nom_formateur" class="form-control" id="nom_formateur" placeholder="Entrez le nom du formateur">
                                @error('nom_formateur')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="prenom_formateur" class="form-label">Prenom du formateur</label>
                            </div>
                            <div class="col-lg-9">
                                <input value="{{ old("prenom_formateur") }}" name="prenom_formateur" type="text" class="form-control" id="prenom_formateur" placeholder="Entrez le prénom du formateur">
                                @error('prenom_formateur')
                                <span class="text-danger">
                                            {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="email_formateur" class="form-label">Email du formateur</label>
                            </div>
                            <div class="col-lg-9">
                                <input value="{{ old("email_formateur") }}" name="email_formateur" type="text" class="form-control" id="prenom_formateur" placeholder="Entrez l'email du formateur">
                                @error('email_formateur')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="tel_formateur" class="form-label">Contact du formateur</label>
                            </div>
                            <div class="col-lg-9">
                                <input value="{{ old("tel_formateur") }}" name="tel_formateur" type="text" class="form-control" id="tel_formateur" placeholder="Entrez le contact du formateur">
                                @error('tel_formateur')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="specialite_formateur" class="form-label">Spécialité du formateur</label>
                            </div>
                            <div class="col-lg-9">
                                <input value="{{ old("specialite_formateur") }}" name="specialite_formateur" type="text" class="form-control" id="specialite_formateur" placeholder="Entrez la spécialité du formateur">
                                @error('specialite_formateur')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="cabinet_id" class="form-label">Cabinet du formateur</label>
                            </div>
                            <div class="col-lg-9">
                                <select name="cabinet_id" id="cabinet_id" class="form-select" aria-label="Default select example">
                                    <option value="">Sélectionner le cabinet du formateur</option>
                                    @foreach($cabinets as $key => $cabinet)
                                        <option @if($cabinet->id == old("cabinet_id")) selected @endif value="{{$cabinet->id}}">{{$cabinet->nom_cabinet}}</option>
                                    @endforeach
                                </select>
                                @error('cabinet_id')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="password" class="form-label">Mot de passe du formateur</label>
                            </div>
                            <div class="col-lg-9">
                                <input value="{{ old("password") }}" name="password" type="text" class="form-control" id="password" placeholder="Entrez le mot de passe du formateur">
                                @error('password')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Enregistrer le formateur</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection
