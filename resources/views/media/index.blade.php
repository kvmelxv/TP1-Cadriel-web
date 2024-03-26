@extends('layouts.app')
@section('title', 'Files')
@section('content')

<main class="form-signin d-flex flex-column justify-content-center w-100 m-auto p-4">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">@lang('Name')</th>
                <th scope="col">@lang('Size')</th>
                <th scope="col">@lang('Author')</th>
                <th scope="col">@lang('Upload')</th>
                <th scope="col">@lang('Action')</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($medias as $media)
            <tr>
                <td>{{ $media->name }}</td>
                <td>{{ $media->size }} Mo</td>
                <td>{{ $media->user->nom }}</td>
                <td>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
                       <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
                       <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708z"/>
                    </svg>
                </td>
                @if(Auth::check() && Auth::user()->id == $media->user_id)
                <td class="d-flex justify-content-start gap-2">
                  <form action="{{ route('media.destroy', $media->id) }}" method="post">
                  @csrf
                  @method('delete')
                      <button type="submit" class="btn btn-sm btn-outline-danger">@lang('Delete')</button>
                  </form>
                </td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
</main>

@endsection