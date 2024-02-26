@extends('layouts.app')
@section('title', 'Étudiants')
@section('content')

<div class="row m-5">
  @forelse($etudiants as $etudiant) 
        <div class="col-md-4 p-2">
            <div class="card mb-4 mt-2">
                <div class="card-body">
                <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="./assets/img/profil.png" alt="Bootstrap" width="50" height="50" class="rounded-circle border border-warning">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg fill="#ffc107" class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                <small class="text-secondary">{{ $etudiant->ville_id }}</small>
              </li>
              <li class="d-flex align-items-center">
                <svg fill="#ffc107" class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                <small class="text-secondary">{{ $etudiant->date_de_naissance }}</small>
              </li>
            </ul>
                </div>
                <div class="card-footer pb-2 bg-dark">
                    <div class="d-flex justify-content-between">
                      <h5 class="text-light">{{ $etudiant->nom }}</h5>
                      <a href="{{ route('etudiant.show', $etudiant->id )}}" class="btn btn-sm btn-outline-warning">Voir le profil</a>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="alert alert-danger">Il n'y a aucun étudiant !</div>
    @endforelse  

        
</div>

@endsection