<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>註冊確認</title>
</head>
<body>
  <h1>感謝您在 Blog 網站進行註冊！</h1>

  <p>
    請點擊下面的鏈結完成註冊：
    <a href="{{ route('confirm_email', $user->activation_token) }}">
      {{ route('confirm_email', $user->activation_token) }}
    </a>
  </p>

  <p>
    如果這不是您本人的操作，請忽略此信件。
  </p>
</body>
</html>
