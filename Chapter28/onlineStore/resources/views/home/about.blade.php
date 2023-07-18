@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="container">
<div class="row">
    <div class="col-lg-4">
      <div class="d-flex flex-column h-250">
        <div>
          <p class="lead">{{ $viewData["description"] }}</p>
        </div>
        <div class="mt-auto">
          <p class="lead">{{ $viewData["author"] }}</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 text-lg-end">
      <img src="{{ asset('/img/stacy.iu store.png') }}" class="img-fluid rounded">
      </div>
  </div>
</div>
@endsection
