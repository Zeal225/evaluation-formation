@extends('master.master')

@section('content')
    <!-- Toast -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Modifier l'utilisateur</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route("modifier_utilisateurs") }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ @encrypt($utilisateur->id) }}">
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="matricule_utilisateur" class="form-label">Matricule Utilisateur</label>
                            </div>
                            <div class="col-lg-9">
                                <input value="{{ old("matricule_utilisateur") ?? $utilisateur->matricule_utilisateur }}" type="text" name="matricule_utilisateur" class="form-control" id="matricule_utilisateur" placeholder="Entrez le matricule de l'utilisateur">
                                @error('matricule_utilisateur')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="nom_utilisateur" class="form-label">Nom Utilisateur</label>
                            </div>
                            <div class="col-lg-9">
                                <input value="{{ old("nom_utilisateur") ?? $utilisateur->nom_utilisateur  }}" name="nom_utilisateur" type="text" class="form-control" id="nom_utilisateur" placeholder="Entrez le nom de l'utilisateur">
                                @error('nom_utilisateur')
                                <span class="text-danger">
                                            {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="prenom_utilisateur" class="form-label">Prénom Utilisateur</label>
                            </div>
                            <div class="col-lg-9">
                                <input value="{{ old("prenom_utilisateur") ?? $utilisateur->prenom_utilisateur  }}" name="prenom_utilisateur" type="text" class="form-control" id="prenom_utilisateur" placeholder="Entrez le prénom de l'utilisateur">
                                @error('prenom_utilisateur')
                                <span class="text-danger">
                                            {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="departement_utilisateur" class="form-label">Département Utilisateur</label>
                            </div>
                            <div class="col-lg-9">

                                <select name="departement_utilisateur" class="form-select" aria-label="Default select example">
                                    <option value="">Sélectionnez un département</option>
                                    @foreach(\App\Tools::listeDepartements() as $key => $departement)
                                        <option @if($departement == old("departement_utilisateur") || $departement == $utilisateur->departement_utilisateur) selected @endif value="{{$departement}}">{{$departement}}</option>
                                    @endforeach
                                </select>
                                @error('departement_utilisateur')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="service_utilisateur" class="form-label">Service Utilisateur</label>
                            </div>
                            <div class="col-lg-9">
                                <select name="service_utilisateur" class="form-select" aria-label="Default select example">
                                    <option value="">Sélectionnez un service</option>
                                    @foreach(\App\Tools::listeServices() as $key => $service)
                                        <option @if($service == old("service_utilisateur") || $service == $utilisateur->service_utilisateur) selected @endif value="{{$service}}">{{$service}}</option>
                                    @endforeach
                                </select>
                                @error('service_utilisateur')
                                <span class="text-danger">
                                            {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="fonction_utilisateur" class="form-label">Fonction Utilisateur</label>
                            </div>
                            <div class="col-lg-9">
                                <input value="{{ old("fonction_utilisateur") ?? $utilisateur->fonction_utilisateur }}" type="text" class="form-control" name="fonction_utilisateur" placeholder="Entrez la fonction de l'utilisateur">
                                @error('fonction_utilisateur')
                                <span class="text-danger">
                                            {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="id_type_utilisateur" class="form-label">Type utilisateur (type compte)</label>
                            </div>
                            <div class="col-lg-9">
                                <select name="id_type_utilisateur" id="id_type_utilisateur" class="form-select" aria-label="Default select example">
                                    <option value="">Sélectionnez le type de compte</option>
                                @foreach($typeUtilisateurs as $key => $typeUtilisateur)
                                        <option @if($typeUtilisateur->id == old("id_type_utilisateur") || $typeUtilisateur->id == $utilisateur->id_type_utilisateur) selected @endif value="{{$typeUtilisateur->id}}">{{ $typeUtilisateur->libelle_type_utilisateur }}</option>
                                    @endforeach
                                </select>
                                @error('id_type_utilisateur')
                                <span class="text-danger">
                                            {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="agence_utilisateur" class="form-label">Agence de l'agent</label>
                            </div>
                            <div class="col-lg-9">
                                <select name="agence_utilisateur" id="agence_utilisateur" class="form-select" aria-label="Default select example">
                                    <option value="">Sélectionnez une agence</option>
                                @foreach(\App\Tools::listeAgence() as $key => $agence)
                                        <option @if($agence == old("agence_utilisateur") || $agence == $utilisateur->agence_utilisateur) selected @endif value="{{$agence}}">{{$agence}}</option>
                                    @endforeach
                                </select>
                                @error('agence_utilisateur')
                                <span class="text-danger">
                                            {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="email" class="form-label">Email Utilisateur</label>
                            </div>
                            <div class="col-lg-9">
                                <input value="{{ old("email") ?? $utilisateur->email }}" name="email" type="text" class="form-control" id="email" placeholder="Entrez l'email de l'utilisateur">
                                @error('email')
                                <span class="text-danger">
                                            {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="login_utilisateur" class="form-label">Login Utilisateur</label>
                            </div>
                            <div class="col-lg-9">
                                <input value="{{ old("login_utilisateur") ?? $utilisateur->login_utilisateur  }}" name="login_utilisateur" type="text" class="form-control" id="login_utilisateur" placeholder="Entrez login de l'utilisateur">
                                @error('login_utilisateur')
                                <span class="text-danger">
                                            {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="password" class="form-label">Mot de passe utilisateur</label>
                            </div>
                            <div class="col-lg-9">
                                <input value="{{ old("password") }}" name="password" type="text" class="form-control" id="password" placeholder="Entrez un mot de passe">
                                @error('password')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="telephone_utilisateur" class="form-label">Téléphone Utilisateur</label>
                            </div>
                            <div class="col-lg-9">
                                <input value="{{ old("telephone_utilisateur") ?? $utilisateur->telephone_utilisateur }}" name="telephone_utilisateur" type="text" class="form-control" id="telephone_utilisateur" placeholder="Entrez téléphone de l'utilisateur">
                                @error('telephone_utilisateur')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="id_role" class="form-label">Rôle Utilisateur</label>
                            </div>
                            <div class="col-lg-9">
                                <select name="id_role" id="id_role" class="form-select" aria-label="Default select example">
                                    <option value="">Sélectionnez un rôle</option>
                                    @foreach($roles as $key => $role)
                                        <option @if($role->id == old("id_role") || $role->id == $utilisateur->id_role) selected @endif value="{{$role->id}}">{{$role->libelle_role}} ({{ $role->description_role }})</option>
                                    @endforeach
                                </select>
                                @error('id_role')
                                <span class="text-danger">
                                            {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Modifier l'utilisateur</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection
