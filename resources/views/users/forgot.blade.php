@extends('layouts.app')
@section('title', 'Forgot Password')
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


    <div class="m-4 d-flex justify-content-center align-items-center">
        <div class="card h-50 w-50">
            <div class="card-header p-3">
                <h4 class="card-title text-warning text-uppercase">@lang('Reset password')</h4>
            </div>
            <div class="card-body">
                <form class="form" method="POST">
                @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">@lang('Email')</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
                    </div>                
                    <button type="submit" class="btn btn-warning mt-2 w-100">@lang('Submit')</button>
                </form>
            </div>
        </div>
    </div>
</main>

@endsection