@extends('layouts.default')
@section('title', '重置密碼')

@section('content')
  <div class="offset-md-2 col-md-8">
    <div class="card">
      <div class="card-header">
        <h5>重置密碼</h5>
      </div>
      <div class="card-body">
        @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
        @endif

        <form action="{{ route('password.email') }}" method="POST">
          @csrf

          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="form-control-label">信箱：</label>
            <input id="email" type="email" name="email" class="form-control" value="{{ old('email') }}">

            @if ($errors->has('email'))
              <span class="form-text">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary">寄送密碼重置信件</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
