@extends('layouts.app')
@section('title', 'Utilisateur')
@section('content')

<div class="caontainer m-5 p-3 justify-content-center">
    <div class="card w-100 m-auto rounded-top-4">
        <div class="card-header d-flex align-items-center justify-content-between p-3 bg-dark bg-gradient">
            <img src="../assets/img/profil.png" alt="Bootstrap" width="70" height="70" class="rounded-circle border border-warning">
            <h1 class="text-center text-warning fst-italic">{{ $user->nom }}</h1>
        </div>
        <div class="card-body">
            <ul class="list-unstyled fw-light">
                <li class="mt-3"><svg fill="#ffc107" class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/>
                               </svg>
                               <strong>@lang('Adresse') : </strong>{{ $user->adresse }}</li>
                <li class="mt-3"><svg fill="#ffc107" class="bi me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                                </svg>
                                <strong>@lang('Phone') : </strong>{{ $user->telephone }}</li>
                <li class="mt-3"><svg fill="#ffc107" class="bi me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
                                <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 9.671V4.697l-5.803 3.546.338.208A4.5 4.5 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671"/>
                                <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791"/>
                                </svg>
                                <strong>@lang('Email') : </strong>{{ $user->email }}</li>
                <li class="mt-3"><svg fill="#ffc107" class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/>
                                </svg>
                                <strong>@lang('Date of birth') : </strong>{{ $user->date_de_naissance }}</li>
                <li class="mt-3"><svg fill="#ffc107" class="bi me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-buildings-fill" viewBox="0 0 16 16">
                                <path d="M15 .5a.5.5 0 0 0-.724-.447l-8 4A.5.5 0 0 0 6 4.5v3.14L.342 9.526A.5.5 0 0 0 0 10v5.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V14h1v1.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5zM2 11h1v1H2zm2 0h1v1H4zm-1 2v1H2v-1zm1 0h1v1H4zm9-10v1h-1V3zM8 5h1v1H8zm1 2v1H8V7zM8 9h1v1H8zm2 0h1v1h-1zm-1 2v1H8v-1zm1 0h1v1h-1zm3-2v1h-1V9zm-1 2h1v1h-1zm-2-4h1v1h-1zm3 0v1h-1V7zm-2-2v1h-1V5zm1 0h1v1h-1z"/>
                                </svg>
                                <strong>@lang('City') : </strong>{{ $user->ville->Nom }}</li>
            </ul>
        </div>
        <div class="card-footer d-flex justify-content-end gap-4 p-4 rounded-bottom-4">
            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-outline-success w-25">@lang('Edit')</a>
            <button type="button" class="btn btn-sm btn-outline-danger w-25" data-bs-toggle="modal" data-bs-target="#deleteModal">@lang('Delete')</button>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-danger " id="deleteModalLabel">@lang('Delete user')</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @lang('lang.text_delete_user') : {{ $user->nom }} ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-dismiss="modal">@lang('Cancel')</button>
        <form  method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-sm btn-danger">@lang('Delete')</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection