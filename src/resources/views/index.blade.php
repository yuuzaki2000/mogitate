<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset("css/index.css")}}">
    <style>
        svg.w-5.h-5 {
            width: 30px;
            height: 30px;
        }
    </style>
</head>
<body>
    <header class="header">
        <p class="header__logo">商品一覧</p>
        <a class="header__button" href="/products/register">＋商品を追加</a>
    </header>
    <main class="main">
        <aside class="sidebar">
          <form action="/products/search" method="post">
          @csrf
          <input type="text" name="keyword">
            <button type="submit">検索</button>
            <p>価格順で表示</p>
            <select name="">
                <option value="">高い順に表示</option>
            </select>
          </form>
        </aside>
        <article class="content">
            @csrf
                <div class="container">
                    <ul class="group">
                        @foreach ($products as $product)
                        <form class="form" action="/products/{{$product->id}}" method="post">
                        @csrf
                            <li>
                              <img src="{{asset($product->image)}}" alt="はてな">
                              <div class="item__bottom">
                                <p>{{$product->name}}</p>
                                <p>{{$product->price}}</p>
                              </div>
                              <input type="hidden" name="id" value={{$product->id}}>
                              <button type="submit">詳細</button>
                            </li>
                        </form>
                         @endforeach
                    </ul>
                </div>
                <div class="pagination">{{$products->links()}}</div>
        </article>
    </main>
</body>
</html>