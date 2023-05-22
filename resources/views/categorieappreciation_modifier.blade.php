@extends('master.master')

@section('content')
    <!-- Toast -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Ajouter une nouvelle catégorie d'appréciation</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route("modifier_categorie") }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ encrypt($categorie->id) }}">
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="libelle_categorie_appreciation" class="form-label">Libellé catégorie d'appreciation</label>
                            </div>
                            <div class="col-lg-9">
                                <input value="{{ old("libelle_categorie_appreciation") ?? $categorie->libelle_categorie_appreciation }}" type="text" name="libelle_categorie_appreciation" class="form-control" id="libelle_categorie_appreciation" placeholder="Entrez le libellé">
                                @error('libelle_categorie_appreciation')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Enregistrer le libellé</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection
