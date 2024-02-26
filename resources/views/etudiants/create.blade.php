@extends('layouts.app')
@section('title', 'Ajout')
@section('content')

<div class="container d-flex justify-content-center mt-5 mb-5">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header p-3">
                <h4 class="card-title text-warning text-uppercase">Ajouter un nouvel étudiant</h4>
            </div>
            <div class="card-body">
                <form class="form" action="{{ route('etudiant.store') }}" method="POST">
                @csrf
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom') }}">
                        @if ($errors->has('nom'))
                          <div class="text-danger mt-2">
                            {{$errors->first('nom')}}
                          </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="adresse" class="form-label">Adresse</label>
                        <input type="text" class="form-control" id="adresse" name="adresse" value="{{ old('adresse') }}">
                        @if ($errors->has('adresse'))
                          <div class="text-danger mt-2">
                            {{$errors->first('adresse')}}
                          </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="telephone" class="form-label">Télephone</label>
                        <input type="tel" class="form-control" id="telephone" name="telephone" value="{{ old('telephone') }}">
                        @if ($errors->has('telephone'))
                          <div class="text-danger mt-2">
                            {{$errors->first('telephone')}}
                          </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                          <div class="text-danger mt-2">
                            {{$errors->first('email')}}
                          </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="date_de_naissance" class="form-label">Date de naissance</label>
                        <input type="date" class="form-control" id="date_de_naissance" name="date_de_naissance" value="{{ old('date_de_naissance') }}">
                        @if ($errors->has('date_de_naissance'))
                          <div class="text-danger mt-2">
                            {{$errors->first('date_de_naissance')}}
                          </div>
                        @endif
                    </div>
                    <label for="ville" class="form-label">Ville</label>
                    <select class="form-select mb-3" aria-label="Default select example" name="villes_id">
                      <option value="0">Choisir une ville</option>
                    @foreach($villes as $ville)
                      <option value="{{ old('ville_id') }}">{{ $ville->Nom }}</option>
                    @endforeach
                    </select>
                    @if ($errors->has('ville_id'))
                      <div class="text-danger mt-2">
                        {{$errors->first('ville_id')}}
                      </div>
                    @endif
                    <button type="submit" class="btn btn-warning mt-2 w-25">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection