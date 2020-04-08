<!doctype html>
<html lang="ja">
<head>
  <title>Index</title>
</head>
<style>
th { background-color:red; padding:10px; }
td { background-color:#eee; padding:10px;}
</style>
<body>
  <h1>Hello/Index</h1>
  <p>{!!$msg!!}</p>
  @if (Auth::check())
  <p>USER: {{$user->name . ' (' . $user->email . '( '}}</p>
  @else
  <p>※ログインしていません。(<a href="/login">ログイン</a>|<a href="/register">登録</a>)</p>
  @endif
  <ul>
  @foreach($data as $item)
  <li>{!!$item!!}</li>
  @endforeach
  </ul>
</body>
</html>