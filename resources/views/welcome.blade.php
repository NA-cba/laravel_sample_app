<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>データ管理アプリ</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
          body{
            background-color: gray;
          }
          .front {
            padding: 100px 0px;
            text-align: center;
            color:white;
          }
          .front-title{
            font-size:50px;
          }
          .front-menu{
            margin: 120px 120px;
          }
          .a1{
            font-size:20px;
            margin: 50px 50px;
          }
          .a2{
            font-size:20px;
            margin: 50px 50px;
          }
        </style>
    </head>
    <body>
      <div class="front">
        <div class="front-title">
          データ管理アプリ
        </div>
        <div class="front-menu">
          <div class="a1">
            <a href="{{ route('login') }}">ログインする</a>
          </div>
          <div class="a2">
            <a href="{{ route('register') }}">新規ユーザーとして登録する<a>
          </div>
        </div>
      </div>
    </body>
</html>
