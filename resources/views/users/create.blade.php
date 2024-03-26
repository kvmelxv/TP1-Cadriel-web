@extends('layouts.app')
@section('title', 'Ajout')
@section('content')

<main class="form-signin d-flex flex-column justify-content-center w-100 m-auto p-4">

    @if(!$errors->isEmpty())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>     
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>                
    @endif

    <div class="d-flex gap-4">

    <div class="d-flex flex-column p-4">
        <div class="d-flex flex-column mb-4">
           <h1 class="fw-bold mb-4">@lang('lang.text_registration_title')</h1>
           <p class="fw-light mb-4">@lang('lang.text_registration_parag')</p>
           <button type="button" class="btn btn-warning btn-lg px-4 me-md-2 w-50">@lang('lang.text_registration_btn')</button>
        </div>
    </div>

    <div class="col-md-6 m-auto">
        <div class="card">
            <div class="card-header p-2">
                <h4 class="card-title text-warning text-uppercase text-center">@lang('Registration')</h4>
            </div>
            <div class="card-body">
                <form class="form" action="{{ route('user.store') }}" method="POST">
                @csrf
                    <div class="mb-1">
                        <label for="nom" class="form-label">@lang('Name')</label>
                        <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom') }}">
                    </div>
                    <div class="mb-1">
                        <label for="adresse" class="form-label">@lang('Adresse')</label>
                        <input type="text" class="form-control" id="adresse" name="adresse" value="{{ old('adresse') }}">
                    </div>
                    <div class="mb-1">
                        <label for="telephone" class="form-label">@lang('Phone')</label>
                        <input type="tel" class="form-control" id="telephone" name="telephone" value="{{ old('telephone') }}">
                    </div>
                    <div class="mb-1">
                        <label for="email" class="form-label">@lang('Email')</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                    </div>
                    <div class="mb-1">
                        <label for="date_de_naissance" class="form-label">@lang('Date of birth')</label>
                        <input type="date" class="form-control" id="date_de_naissance" name="date_de_naissance" value="{{ old('date_de_naissance') }}">
                    </div>
                    <div class="mb-1">
                        <label for="password" class="form-label">@lang('Password')</label>
                        <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}">
                    </div>
                    <div class="mb-1">
                        <label for="password_confirmation" class="form-label">@lang('Confirm password')</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" value="{{ old('password_confirmation') }}">
                    </div>
                    <label for="ville" class="form-label">@lang('City')</label>
                    <select class="form-select mb-3" aria-label="Default select example" name="ville_id">
                      <option value="0">@lang('Select a city')</option>
                    @foreach($villes as $ville)
                      <option value="{{ $ville->id }}">{{ $ville->Nom }}</option>
                    @endforeach
                    </select>
                    <button type="submit" class="btn btn-warning mt-2 w-100">@lang('Save')</button>
                </form>
            </div>
        </div>
    </div>

    </div>
</main>

@endsection