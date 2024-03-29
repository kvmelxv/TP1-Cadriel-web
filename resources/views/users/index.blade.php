@extends('layouts.app')
@section('title', 'Utilisateurs')
@section('content')

<section class="text-center container border-bottom">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">@lang('lang.text_title_post_listUser')</h1>
        <p class="lead text-body-secondary">@lang('lang.text_parag_post_listUser')</p>
        <p>
          <a href="#" class="btn btn-outline-info my-2">Main call to action</a>
          <a href="#" class="btn btn-warning my-2">Secondary action</a>
        </p>
      </div>
    </div>
</section>
<div class="row m-5">
  @forelse($users as $user) 
        <div class="col-md-4 p-2">
            <div class="card mb-4 mt-2">
                <div class="card-body">
                <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="./assets/img/profil.png" alt="Bootstrap" width="50" height="50" class="rounded-circle border border-warning">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg fill="#ffc107" class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                <small class="text-secondary">{{ $user->ville->Nom }}</small>
              </li>
              <li class="d-flex align-items-center">
                <svg fill="#ffc107" class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                <small class="text-secondary">{{ $user->date_de_naissance }}</small>
              </li>
            </ul>
                </div>
                <div class="card-footer pb-2 bg-dark bg-gradient">
                    <div class="d-flex justify-content-between">
                      <h5 class="text-light">{{ $user->nom }}</h5>
                      <a href="{{ route('user.show', $user->id )}}" class="btn btn-sm btn-outline-warning">@lang('lang.text_btn_listUser')</a>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="alert alert-danger">Il n'y a aucun étudiant !</div>
    @endforelse
    <div class="d-flex justify-content-center p-3">
      {{ $users }}
    </div>

        
</div>

@endsection