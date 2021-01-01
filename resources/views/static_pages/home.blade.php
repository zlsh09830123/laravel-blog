@extends('layouts.default')

@section('content')
  <div class="jumbotron">
    <h1>Hello Laravel</h1>
    <p class="lead">
      主頁
    </p>
    <p>
      一切。將從這裡開始
    </p>
    <p>
      <a href="{{ route('signup') }}" class="btn btn-lg btn-success" role="button">現在註冊</a>
    </p>
  </div>
@endsection
