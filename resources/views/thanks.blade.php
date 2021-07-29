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
    <p>お問い合わせありがとうございます。</p>

    
    <a href="$index">トップへ戻る</a>


      </form>
</body>

</html>