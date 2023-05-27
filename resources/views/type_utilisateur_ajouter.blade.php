@extends('master.master')

@section('content')
    <!-- Toast -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Ajouter un type utilisateur</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route("ajouter_type_utilisateur") }}" method="post">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="libelle_type_utilisateur" class="form-label">Libellé type utilisateur</label>
                            </div>
                            <div class="col-lg-9">
                                <input value="{{ old("libelle_type_utilisateur") }}" type="text" name="libelle_type_utilisateur" class="form-control" id="libelle_type_utilisateur" placeholder="Entrez le libellé">
                                @error('libelle_type_utilisateur')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Enregistrer le type utilisateur</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection
