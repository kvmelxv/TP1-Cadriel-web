@extends('layouts.app')
@section('title', 'Edit Forum')
@section('content')

<main class="form-signin d-flex flex-column justify-content-center w-100 m-auto p-2">

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

    <div class="d-flex p-2">

        <div class="card w-100">
            <div class="card-body">
                <form class="form" method="POST">
                @csrf
                @method('PUT')
                    <h5 class="fw-light">@lang('Section in english')</h5>
                    <div class="mb-1">
                        <label for="titre_en" class="form-label fw-light">@lang('Title') *</label>
                        <input type="text" class="form-control" id="titre_en" name="titre_en" value="{{ $article->titre['en'] }}">
                    </div>
                    <div class="mb-1">
                        <label for="contenu_en" class="form-label fw-light">@lang('Article') *</label>
                        <textarea class="form-control" name="contenu_en" id="contenu_en" cols="30" rows="2">{{ $article->contenu['en'] }}</textarea>
                    </div>

                    <h5 class="fw-light">@lang('Section in french')</h5>
                    <div class="mb-1">
                        <label for="titre_fr" class="form-label fw-light">@lang('Title')</label>
                        <input type="text" class="form-control" id="titre_fr" name="titre_fr" value="{{ $article->titre['fr'] }}">
                    </div>
                    <div class="mb-1">
                        <label for="contenu_fr" class="form-label fw-light">@lang('Article')</label>
                        <textarea class="form-control"name="contenu_fr" id="contenu_fr" cols="30" rows="2">{{ $article->contenu['fr'] }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-warning mt-2 w-100">@lang('Save')</button>
                </form>
            </div>
        </div>
    </div>
</main>

@endsection