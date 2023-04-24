@extends('master.master')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Ajouter un nouvel objectif de formation</h4>
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="row mb-3">
                            <div class="">
                                <label for="exampleFormControlTextarea5" class="form-label">Libellée de l'objectif</label>
                                <textarea class="form-control" id="exampleFormControlTextarea5" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Enrégistrer l'objectif</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection
