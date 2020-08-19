@extends('layouts.helloapp')

@section('title','削除ページ')

@section('menubar')
  @parent
  <a href="/hello">データの一覧へ</a>
@endsection

@section('content')
  <form action="/hello/del" method="post">
    <table>
      @csrf
      <input type="hidden" name="id" value="{{$form->id}}">
      <tr><th>名前: </th><td>{{$form->name}}</td></tr>
      <tr><th>Mail: </th><td>{{$form->mail}}</td></tr>
      <tr><th>年齢: </th><td>{{$form->age}}</td></tr>
      <tr><th>誕生日: </th><td>{{$form->birthday1}}</td></tr>
      <tr><th>最終来店日: </th><td>{{$form->lastday}}</td></tr>
      <tr><th>来店回数: </th><td>{{$form->visitsnumber}}</td></tr>
      <tr><th>支払い総額: </th><td>{{$form->amount}}</td></tr>
      <tr><th></th><td><input type="submit" value="削除する"></td></tr>
    </table>
  </form>
@endsection

@section('footer')
  copyright Astore
@endsection
