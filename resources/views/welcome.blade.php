@extends('layouts.app')
@section('title', 'Home')
@section('content')

<div class="container col-xxl-10 py-3">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="./assets/img/ado.jpg" class="d-block mx-lg-auto img-fluid border rounded-3" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">@lang('lang.text_title_post_1')</h1>
        <p class="lead">@lang('lang.text_parag_post_1')</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-warning btn-lg px-4 me-md-2">Primary</button>
          <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
        </div>
      </div>
    </div>
</div>

<div class="px-4 pt-5 my-5 text-center border-bottom">
    <h1 class="display-4 fw-bold text-body-emphasis">@lang('lang.text_title_post_2')</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">@lang('lang.text_parag_post_2')</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
        <button type="button" class="btn btn-warning btn-lg px-4 me-sm-3">Primary button</button>
        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
      </div>
    </div>
    <div class="overflow-hidden" style="max-height: 30vh;">
      <div class="container px-5">
        <img src="./assets/img/school.jpg" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
      </div>
    </div>
</div>

<div class="px-4 py-5 my-5 text-center">
    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="90" fill="#ffc107" class="bi bi-backpack3-fill me-2 mb-2" viewBox="0 0 16 16">
      <path d="M5 10v3h6v-3h-1v.5a.5.5 0 0 1-1 0V10z"/>
      <path d="M6 2v.341a6 6 0 0 0-1.308.653l-.416-1.247a1 1 0 0 0-1.749-.284l-.77 1.027a1 1 0 0 0-.149.917l.803 2.407A6 6 0 0 0 2 8v5.5A2.5 2.5 0 0 0 4.5 16h7a2.5 2.5 0 0 0 2.5-2.5V8c0-.771-.146-1.509-.41-2.186l.801-2.407a1 1 0 0 0-.148-.917l-.77-1.027a1 1 0 0 0-1.75.284l-.415 1.247A6 6 0 0 0 10 2.34V2a2 2 0 1 0-4 0m1 0a1 1 0 0 1 2 0v.083a6 6 0 0 0-2 0zm5.941 2.595a6 6 0 0 0-.8-.937l.531-1.595.77 1.027zM3.86 3.658a6 6 0 0 0-.8.937L2.557 3.09l.77-1.027zm.18 3.772a4 4 0 0 1 7.92 0 .5.5 0 1 1-.99.142 3 3 0 0 0-5.94 0 .5.5 0 1 1-.99-.142M4 9.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5z"/>
    </svg>
    <h1 class="display-5 fw-bold text-body-emphasis">@lang('lang.text_title_post_3')</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">@lang('lang.text_parag_post_3')</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <button type="button" class="btn btn-warning btn-lg px-4 gap-3">Primary button</button>
        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
      </div>
    </div>
  </div>


@endsection