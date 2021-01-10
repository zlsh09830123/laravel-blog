@can('follow', $user)
  <div class="text-center mt-2 mb-4">
    @if (Auth::user()->isFollowing($user->id))
      <form action="{{ route('followers.destroy', $user->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-outline-primary">取消追蹤</button>
      </form>
    @else
      <form action="{{ route('followers.store', $user->id) }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-sm btn-outline-primary">追蹤</button>
      </form>
    @endif
  </div>
@endcan
