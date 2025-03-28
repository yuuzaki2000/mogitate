<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/detail.css')}}">
</head>
<body>
    <header></header>
    <main class="main">
      <form class="form__card" action="" method="post">
        <div class="upper">
            <div class="img-container">
                <img src="{{asset('storage/img/banana.png')}}" alt="バナナ">
            </div>
            <div class="profile__upper">
                <div>
                    <p>商品名{{$product->name}}</p>
                    <input type="text" name="name" value="{{$product->name}}">
                </div>
                <div>
                    <p>値段</p>
                    <input type="text">
                </div>
                <div>
                    <p>季節</p>
                    <input type="radio" name="season" value="spring" checked>春
                    <input type="radio" name="season" value="summer">夏
                    <input type="radio" name="season" value="autumn">秋
                    <input type="radio" name="season" value="winter">冬
                </div>
            </div>
        </div>
        <div class="select__file">
            <button class="select__file--button">ファイルを選択</button>
        </div>
        <div class="profile__bottom">
            <p>商品説明</p>
            <textarea name="" cols="60" rows="10"></textarea>
        </div>
        <div class="preserve-button">
            <button class="preserve__button--submit">変更を保存</button>
        </div>
      </form>
    </main>
</body>
</html>