@extends('master.master')

@section('content')
    <!-- Toast -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Ajouter un nouveau rôle</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route("ajouter_role") }}" method="post">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="libelle_role" class="form-label">Libellé rôle</label>
                            </div>
                            <div class="col-lg-9">
                                <input value="{{ old("libelle_role") }}" type="text" name="libelle_role" class="form-control" id="libelle_role" placeholder="Entrez le libellé">
                                @error('libelle_role')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="description_role" class="form-label">Description rôle</label>
                            </div>
                            <div class="col-lg-9">
                                <input value="{{ old("description_role") }}" type="text" name="description_role" class="form-control" id="description_role" placeholder="Entrez ldescription">
                                @error('description_role')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Enregistrer le rôle</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection
