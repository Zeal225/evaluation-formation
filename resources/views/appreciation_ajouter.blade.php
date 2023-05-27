@extends('master.master')

@section('content')
    <!-- Toast -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Ajouter une nouvelle appréciation</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route("ajouter_appreciation") }}" method="post">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="categorie_appreciation_id" class="form-label">Catégorie appréciation</label>
                            </div>
                            <div class="col-lg-9">
                                <select name="categorie_appreciation_id" id="categorie_appreciation_id" class="form-select" aria-label="Default select example">
                                    <option value="">Sélectionnez le type de compte</option>
                                    @foreach($categories as $key => $categorie)
                                        <option @if($categorie->id == old("categorie_appreciation_id")) selected @endif value="{{ $categorie->id }}">{{ $categorie->libelle_categorie_appreciation }}</option>
                                    @endforeach
                                </select>
                                @error('categorie_appreciation_id')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="libelle_appreciation" class="form-label">Libellé appreciation</label>
                            </div>
                            <div class="col-lg-9">
                                <input value="{{ old("libelle_appreciation") }}" type="text" name="libelle_appreciation" class="form-control" id="libelle_appreciation" placeholder="Entrez le libellé">
                                @error('libelle_appreciation')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Enregistrer l'appréciation</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection
