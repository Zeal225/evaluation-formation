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
                                <textarea name="theme_formation" class="form-control" id="theme_formation" rows="3">{{ old("theme_formation") }}</textarea>
                                @error('theme_formation')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror

                            </div>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Enrégistrer la formation</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
