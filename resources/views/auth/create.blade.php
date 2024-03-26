@extends('layouts.app')
@section('title', 'Login')
@section('content')

<main class="form-signin w-100 m-auto p-4">

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

    <div class="container col-xl-12 col-xxl-10 px-2">
      <div class="row align-items-center g-lg-5 py-3">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">@lang('lang.text_title_post_login')</h1>
        <p class="col-lg-10 fs-4 fw-light">@lang('lang.text_parag_post_login')</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-light bg-gradient" action="{{ route('login.store') }}" method="POST">
          @csrf
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
            <label for="email" class="form-label">@lang('Email')</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="password" name="password">
            <label for="password" class="form-label">@lang('Password')</label>
          </div>
          <div class="checkbox mb-3">
            <label class="fw-light">
              <input type="checkbox" value="remember-me"> @lang('lang.text_remember_login')
            </label>
          </div>
          <button class="w-100 btn btn-lg btn-warning" type="submit">@lang('lang.text_btn_login')</button>
          <hr class="my-2">
          <a class="fw-light" href="{{ route('password.forgot') }}">Mot de passe oublié ?</a>
          <hr class="my-2">
          <small class="text-body-secondary fw-light">@lang('lang.text_terms_login')</small>
        </form>
      </div>
      </div>
    </div>
</main>
@endsection