@extends('master.master')

@section('content')
    <!-- Toast -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Modifier le cabinet</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route("modifier_cabinet") }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ @encrypt($cabinet->id) }}">
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="nom_cabinet" class="form-label">Nom du cabinet</label>
                            </div>
                            <div class="col-lg-9">
                                <input value="{{ old("nom_cabinet") ?? $cabinet->nom_cabinet }}" type="text" name="nom_cabinet" class="form-control" id="nom_cabinet" placeholder="Entrez le nom du cabinet de formation">
                                @error('nom_cabinet')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="adresse_cabinet" class="form-label">Adresse du cabinet</label>
                            </div>
                            <div class="col-lg-9">
                                <input value="{{ old("adresse_cabinet") ?? $cabinet->adresse_cabinet  }}" name="adresse_cabinet" type="text" class="form-control" id="adresse_cabinet" placeholder="Entrez l'adresse du cabinet de formation">
                                @error('adresse_cabinet')
                                <span class="text-danger">
                                            {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Modifier le cabinet</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection
