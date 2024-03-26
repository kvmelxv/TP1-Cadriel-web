@extends('layouts.app')
@section('title', 'Ajout Forum')
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
    
    <div class="d-flex flex-column">
    @forelse($articles as $article) 
    <div class="p-2">
        <div class="card h-100 w-100 d-inline-block">
            <div class="card-header">
                <h4 class="card-title text-warning text-capitalize text-center">{{ $article ? $article->titre[app()->getLocale()] ?? $article->titre['en'] : '' }}</h4>
            </div>
            <div class="card-body">
               <p class="fw-light">{{ $article ? $article->contenu[app()->getLocale()] ?? $article->contenu['en'] : '' }}</p>
               <strong>@lang('Author')</strong><p>{{ $article->user->nom }}</p>
               <strong>@lang('Date of publication')</strong><p>{{ $article->created_at }}</p>  
            </div>
            
            @if(Auth::check() && Auth::user()->id == $article->user_id)
            <div class="card-footer d-flex justify-content-end gap-4 p-4 rounded-bottom-4">
              <a href="{{ route('forum.edit', $article->id) }}" class="btn btn-sm btn-outline-success w-25">@lang('Edit')</a>
              <form  action="{{ route('forum.destroy', $article->id) }}" method="post">
              @csrf
              @method('delete')
                <button type="submit" class="btn btn-sm btn-outline-danger">@lang('Delete')</button>
              </form>
            </div>
            @endif
            
        </div>
    </div>
    @empty
        <div class="alert alert-danger">Il n'y a aucun article !</div>
    @endforelse
    </div>
</main>
@endsection