<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>找回密碼</title>
</head>
<body>
  <h1>您正在嘗試找回密碼</h1>

  <p>請點擊以下鏈結進入下一步操作：
    <a href="{{ route('password.reset', $token) }}">
      {{ route('password.reset', $token) }}
    </a>
  </p>

  <p>如果這不是您本人的話，請忽略此信件。</p>
</body>
</html>
