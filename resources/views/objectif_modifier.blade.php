@extends('master.master')

@section('content')
    <!-- Toast -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Modifier un objectif</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route("modifier_objectif") }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ encrypt($objectif->id) }}">
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="libelle_objectif" class="form-label">Libellé objectif</label>
                            </div>
                            <div class="col-lg-9">
                                <input value="{{ old("libelle_objectif") ?? $objectif->libelle_objectif }}" type="text" name="libelle_objectif" class="form-control" id="libelle_objectif" placeholder="Entrez le libellé de l'objectif">
                                @error('libelle_objectif')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="note_objectif" class="form-label">Note objectif (sur combien est noté cet objectif)</label>
                            </div>
                            <div class="col-lg-9">
                                <input value="{{ old("note_objectif") ?? $objectif->note_objectif }}" name="note_objectif" type="number" min="0" class="form-control" id="note_objectif" placeholder="Entrez la note de l'objectif">
                                @error('note_objectif')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Modifier l'objectif</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection
