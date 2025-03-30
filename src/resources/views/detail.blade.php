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
      <form class="form__card" action="/products/{{$product->id}}/update" method="post">
      @csrf
        <div class="upper">
            <div class="img-container">
                <img src="{{asset($product->image)}}" alt="商品画像">
            </div>
            <div class="profile__upper">
                <input type="hidden" name="id" value="{{$product->id}}">
                <div>
                    <p>商品名{{$product->name}}</p>
                    <input type="text" name="name" value="{{$product->name}}">
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
                    <input type="text" name="price" value="{{$product->price}}">
                    @error('price')
                    <div class="error-message">
                      <p>
                        {{$errors->first('price')}}
                      </p>
                    </div>
                    @enderror
                </div>
                <div>
                    <p>季節</p>
                    @foreach ($seasons as $season)
                    <input type="checkbox" name="seasons[]" value="{{$season->id}}" checked>{{$season->name}}
                    @endforeach
                    @error('seasons')
                    <div class="error-message">
                      <p>
                        {{$errors->first('seasons')}}
                      </p>
                    </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="select__file">
            <button class="select__file--button">ファイルを選択</button>
            <input class="img-input" type="text" name="image" value="{{$product->image}}">
                    @error('image')
                    <div class="error-message">
                      <p>
                        {{$errors->first('image')}}
                      </p>
                    </div>
                    @enderror
        </div>
        <div class="profile__bottom">
            <p>商品説明</p>
            <textarea name="description" cols="60" rows="10" value="{{$product->description}}">{{$product->description}}</textarea>
                    @error('description')
                    <div class="error-message">
                      <p>
                        {{$errors->first('description')}}
                      </p>
                    </div>
                    @enderror
        </div>
        <div class="button-group">
            <div class="back-button">
                <a href="/products">戻る</a>
            </div>
            <div class="preserve-button">
                <button class="preserve__button--submit">変更を保存</button>
            </div>
        </div>
      </form>
      <form class="delete-button" action="/products/{{$product->id}}/delete" method="post">
      @csrf
            <input type="hidden" name="id" value="{{$product->id}}">
            <svg class="trash" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0L284.2 0c12.1 0 23.2 6.8 28.6 17.7L320 32l96 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 96C14.3 96 0 81.7 0 64S14.3 32 32 32l96 0 7.2-14.3zM32 128l384 0 0 320c0 35.3-28.7 64-64 64L96 512c-35.3 0-64-28.7-64-64l0-320zm96 64c-8.8 0-16 7.2-16 16l0 224c0 8.8 7.2 16 16 16s16-7.2 16-16l0-224c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16l0 224c0 8.8 7.2 16 16 16s16-7.2 16-16l0-224c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16l0 224c0 8.8 7.2 16 16 16s16-7.2 16-16l0-224c0-8.8-7.2-16-16-16z"/></svg>
            <button type="submit">削除</button>
      </form>
    </main>
</body>
</html>