@extends('layouts.app')

@section('title', 'Test page title')

@section('sidebar')
  @parent

  <p>This is appended to the master sidebar</p>
@endsection

@section('content')
  <h1>Testing world</h1>
  <div class="col-12 col-md-6 offset-md-3">
    <h2>Testing bootstrap</h2>
    <div class="btn btn-danger">Bootstrap button</div>
    <p class="test-class">Styled text</p>
    </div>
  </div>
@endsection
