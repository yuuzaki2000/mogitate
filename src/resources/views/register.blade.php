<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
</head>
<body>
    <div class="container">
        <div class="header">
            <p>商品登録</p>
        </div>
        <form class="form" action="/products/register" method="post">
        @csrf
            <div>
                <p>商品名</p>
                <span class="required">必須</span>
                <input type="text" name="name">
            </div>
            <div>
                <p>値段</p>
                <span class="required">必須</span>
                <input type="text" name="price">
            </div>
            <div>
                <p>商品画像</p>
                <span class="required">必須</span>
                <button>ファイルを選択</button>
                <input type="text" name="image">
            </div>
            <div>
                <p>季節</p>
                <span class="required">必須</span>
                <input type="radio" name="season" value="1">春
                <input type="radio" name="season" value="2">夏
                <input type="radio" name="season" value="3">秋
                <input type="radio" name="season" value="4">冬
            </div>
            <div>
                <p>商品説明</p>
                <span class="required">必須</span>
                <textarea name="description" id="" cols="100" rows="10"></textarea>
            </div>
            <div>
                <a href="/products">戻る</a>
                <button type="submit">登録</button>
            </div>
        </form>
    </div>
</body>
</html>