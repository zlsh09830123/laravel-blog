<form action="{{ route('statuses.store') }}" method="POST">
  @include('shared._errors')
  @csrf
  <textarea rows="3" class="form-control" placeholder="在想些什麼？" name="content">{{ old('content') }}</textarea>
  <div class="text-right">
    <button type="submit" class="btn btn-primary mt-3">發布</button>
  </div>
</form>
