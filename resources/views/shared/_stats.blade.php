<a href="#">
  <strong id="following" class="stat">
    {{ count($user->followings) }}
  </strong>
  追蹤中
</a>
<a href="#">
  <strong id="followers" class="stat">
    {{ count($user->followers) }}
  </strong>
  追蹤者
</a>
<a href="#">
  <strong id="statuses" class="stat">
    {{ $user->statuses()->count() }}
  </strong>
  Blog
</a>
