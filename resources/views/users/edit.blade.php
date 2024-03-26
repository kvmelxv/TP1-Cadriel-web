@extends('layouts.app')
@section('title', 'edit')
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


    <div class="col-md-6 m-auto">
        <div class="card">
            <div class="card-header p-3">
                <h4 class="card-title text-warning text-uppercase">@lang('Edit a user')</h4>
            </div>
            <div class="card-body">
                <form class="form" method="POST">
                @csrf
                @method('PUT')
                    <div class="mb-3">
                        <label for="nom" class="form-label">@lang('Name')</label>
                        <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom', $user->nom) }}">
                    </div>
                    <div class="mb-3">
                        <label for="adresse" class="form-label">@lang('Adresse')</label>
                        <input type="text" class="form-control" id="adresse" name="adresse" value="{{ old('adresse', $user->adresse) }}">
                    </div>
                    <div class="mb-3">
                        <label for="telephone" class="form-label">@lang('Phone')</label>
                        <input type="tel" class="form-control" id="telephone" name="telephone" value="{{ old('telephone', $user->telephone) }}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">@lang('Email')</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}">
                    </div>
                    <div class="mb-3">
                        <label for="date_de_naissance" class="form-label">@lang('Date of birth')</label>
                        <input type="date" class="form-control" id="date_de_naissance" name="date_de_naissance" value="{{ old('date_de_naissance', $user->date_de_naissance) }}">
                    </div>
                    <label for="ville" class="form-label">@lang('City')</label>
                    <select class="form-select mb-3" aria-label="Default select example" name="ville_id">
                      <option value="0">@lang('Select a city')</option>
                    @foreach($villes as $ville)
                      <option value="{{ $ville->id }}" {{ $user->ville_id == $ville->id ? 'selected' : '' }}>{{ $ville->Nom }}</option>
                    @endforeach
                    </select>
                    <button type="submit" class="btn btn-warning mt-2 w-100">@lang('Save')</button>
                </form>
            </div>
        </div>
    </div>
</main>

@endsection