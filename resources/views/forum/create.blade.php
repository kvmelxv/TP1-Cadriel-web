@extends('layouts.app')
@section('title', 'Ajout Forum')
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

    <div class="row g-4 py-5 row-cols-1 row-cols-lg-2">

        <div class="card w-50 m-auto">
            <div class="card-body">
                <form class="form" action="{{ route('forum.store') }}" method="POST">
                @csrf
                    <h5 class="fw-light">@lang('Section in english')</h5>
                    <div class="mb-1">
                        <label for="titre_en" class="form-label fw-light">@lang('Title') *</label>
                        <input type="text" class="form-control" id="titre_en" name="titre_en">
                    </div>
                    <div class="mb-1">
                        <label for="contenu_en" class="form-label fw-light">@lang('Article') *</label>
                        <textarea class="form-control" name="contenu_en" id="contenu_en" cols="30" rows="2"></textarea>
                    </div>

                    <h5 class="fw-light">@lang('Section in french')</h5>
                    <div class="mb-1">
                        <label for="titre_fr" class="form-label fw-light">@lang('Title')</label>
                        <input type="text" class="form-control" id="titre_fr" name="titre_fr">
                    </div>
                    <div class="mb-1">
                        <label for="contenu_fr" class="form-label fw-light">@lang('Article')</label>
                        <textarea class="form-control"name="contenu_fr" id="contenu_fr" cols="30" rows="2"></textarea>
                    </div>
                    <button type="submit" class="btn btn-warning mt-2 w-100">@lang('Share')</button>
                </form>
            </div>
        </div>
    </div>
</main>

@endsection