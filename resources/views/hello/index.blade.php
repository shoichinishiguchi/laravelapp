<html>
<head>
  <title>Hello/Index</title>
  <style>
  body { font-size:16pt; color: #999;}
  h1 { font-size:50pt; text-align:right; color:#f6f6f6;
       margin: -20px 0px -30px 0px; letter-spacing:-4pt; }
  </style>
</head>
<body>
    <h1>Blade/Index</h1>
    <p>$#064;forディレクティブの例</p>
    <ol>
    @php
      $counter = 0;
    @endphp
    @while ($counter < count($items))
      <li>{{$items[$counter]}}</li>
      @php
      $counter++;
      @endphp
    @endwhile
    </ol>
</body>
</html>

<!-- <h1>Blade/Index</h1>
    <p>$#064;forディレクティブの例</p>
    @foreach($items as $item)
      @if ($loop->first)
        <p>※データ一覧</p>
        <ul>
      @endif
      <li>No.{{$loop->iteration}}({{$item}})</li>
      @if ($loop->last)
        </ul><p>----ここまで</p>
      @endif
      @endforeach -->

<!--
<body>
    <h1>Blade/Index</h1>
    <p>$#064;forディレクティブの例</p>
    <ol>
    @for ($i = 1; $i <  100; $i++)
    @if ($i % 2 == 1)
      @continue
    @elseif ($i <=10)
    <li>No.{{$i}}</li>
    @else
      @break
    @endif
    @endfor
    </ol>
</body> -->

<!-- <body>
    <h1>Blade/Index</h1>
    @isset($msg)
      <p>こんにちは{{$msg}}さん。</p>
    @else
      <p>お名前を入力してください。</p>
    @endisset
    <form method="POST" action="hello">
      {{ csrf_field() }}
      <input type="text" name="msg">
      <input type="submit">
    </form>
</body> -->
