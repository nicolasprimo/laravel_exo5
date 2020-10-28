@extends('partials.templates.template')

@section('page_name')
About
@stop
@section('content')
<div class="card mb-" style="">
  <div class="row no-gutters">
    <div class="col-md-6">
      <img src="{{asset('img/toast.jpg')}}" class="card-img" alt="...">
    </div>
    <div class="col-md-6">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>
@endsection