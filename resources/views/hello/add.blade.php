@extends('layouts.helloapp')

@section('title','新規作成ページ')

@section('menubar')
  @parent
  <a href="/hello">データの一覧へ</a>
@endsection

@section('content')
  <form action="/hello/add" method="post">
    <table>
      @csrf
      <tr><th>名前: </th><td><input type="text" placeholder="例 tarou yamada"name="name"></td></tr>
      <tr><th>Mail: </th><td><input type="text" placeholder="例 xxx@docomo.jp" name="mail"></td></tr>
      <tr><th>年齢: </th><td><input type="text" placeholder="例 18" name="age"></td></tr>
      <tr><th>誕生日: </th><td><input type="text" placeholder="例 2002-04-05" name="birthday1"></td></tr>
      <tr><th>最終来店日: </th><td><input type="text" placeholder="例 2020-01-01" name="lastday"></td></tr>
      <tr><th>来店回数: </th><td><input type="text" placeholder="例 1" name="visitsnumber"></td></tr>
      <tr><th>支払い総額: </th><td><input type="text" placeholder="例 ¥9,700" name="amount"></td></tr>

      <tr><th></th><td><input type="submit" value="データを新規作成する"></td></tr>
    </table>
  </form>
@endsection

@section('footer')
  copyright Astore
@endsection
