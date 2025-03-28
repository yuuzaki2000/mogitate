<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset("css/index.css")}}">
</head>
<body>
    <header class="header">
        <p class="logo">商品一覧</p>
    </header>
    <main class="main">
        <aside class="sidebar">
            <input type="text">
            <button>検索</button>
            <p>価格順で表示</p>
            <select name="">
                <option value="">高い順に表示</option>
            </select>
        </aside>
        <article class="content">
            <form action="/products" method="get">
            @csrf
                <div class="container">
                    <ul class="group">
                            @foreach ($products as $product)
                            <li class="item">
                              <img src="{{asset($product->image)}}" alt="はてな">
                              <div class="item__bottom">
                                <p>{{$product->name}}</p>
                                <p>{{$product->price}}</p>
                              </div>
                              <input type="hidden" name="productId" value="{{$product->id}}">
                              <a href="{{route('product.show', ['product' => $product->id])}}">詳細</a>
                            </li>
                            @endforeach
                    </ul>
                </div>
            </form>
        </article>
    </main>
</body>
</html>