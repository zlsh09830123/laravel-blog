@extends('layouts.default')

@section('content')
  @if (Auth::check())
    <div class="row">
      <div class="col-md-8">
        <section class="status_form">
          @include('shared._status_form')
        </section>
        <h4>Blog 列表</h4>
        <hr>
        @include('shared._feed')
      </div>
      <aside class="col-md-4">
        <section class="user_info">
          @include('shared._user_info', ['user' => Auth::user()])
        </section>
      </aside>
    </div>
  @else
    <div class="jumbotron">
      <h1>Hello Laravel</h1>
      <p class="lead">
        Blog 主頁
      </p>
      <p>
        一切。將從這裡開始
      </p>
      <p>
        <a href="{{ route('signup') }}" class="btn btn-lg btn-success" role="button">現在註冊</a>
      </p>
    </div>
  @endif
@endsection
