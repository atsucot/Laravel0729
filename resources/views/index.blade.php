<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
</head>

<body>
  <h1>{{$content}}</h1>
  <form action="/" method="POST">
    @csrf
    <p>氏名</p>
    <input type="text" name="content" >
    <p>メールアドレス</p>
    <input type="text" name="content" ><br>
    <input type="submit" value="送信する">
      </form>
</body>

</html>