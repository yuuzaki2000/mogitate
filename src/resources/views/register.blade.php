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
                <input type="text" name="name" placeholder="商品名を入力">
                @error('name')
                  <div class="error-message">
                    <p>
                    {{$errors->first('name')}}
                    </p>
                  </div>
                @enderror
            </div>
            <div>
                <p>値段</p>
                <span class="required">必須</span>
                <input type="text" name="price" placeholder="値段を入力">
                @error('price')
                  <div class="error-message">
                    <p>
                    {{$errors->first('price')}}
                    </p>
                  </div>
                @enderror
            </div>
            <div>
                <p>商品画像</p>
                <span class="required">必須</span>
                <button>ファイルを選択</button>
                <input type="text" name="image">
                @error('image')
                  <div class="error-message">
                    <p>
                    {{$errors->first('image')}}
                    </p>
                  </div>
                @enderror
            </div>
            <div>
                <p>季節</p>
                <span class="required">必須</span>
                <span class="multiple">複数選択可</span>
                <input type="radio" name="seasons" value="1">春
                <input type="radio" name="seasons" value="2">夏
                <input type="radio" name="seasons" value="3">秋
                <input type="radio" name="seasons" value="4">冬
                @error('seasons')
                  <div class="error-message">
                    <p>
                    {{$errors->first('seasons')}}
                    </p>
                  </div>
                @enderror
            </div>
            <div>
                <div>
                    <p>商品説明</p>
                    <span class="required">必須</span>
                </div>
                <textarea name="description" id="" cols="100" rows="10" placeholder="商品の説明を入力"></textarea>
                @error('description')
                  <div class="error-message">
                    <p>
                    {{$errors->first('description')}}
                    </p>
                  </div>
                @enderror
            </div>
            <div>
                <a href="/products">戻る</a>
                <button type="submit">登録</button>
            </div>
        </form>
    </div>
</body>
</html>