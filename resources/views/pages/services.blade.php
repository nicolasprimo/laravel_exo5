@extends('partials.templates.template')


@section('page_name')
Services
@stop

@section('content')

<img src="{{asset('img/1200x300.jpg')}}" class="img-fluid ">
<div class="card-group mt-4">
  <div class="card">
    
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <input type="button" class=" btn btn-small bg-primary text-light" value="Read">
    </div>
  </div>
  <div class="card">
    
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <input type="button" class=" btn btn-small bg-primary text-light" value="Read">
    </div>
  </div>
  <div class="card">
    
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <input type="button" class=" btn btn-small bg-primary text-light" value="Read">
    </div>
  </div>
</div>
@endsection