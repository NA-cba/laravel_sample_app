  @extends('layouts.helloapp')

@section('title','更新ページ')

@section('menubar')
  @parent
  <a href="/hello">データの一覧へ</a>
@endsection

@section('content')
  <form action="/hello/edit" method="post">
    <table>
      @csrf
      <input type="hidden" name="id" value="{{$form->id}}">
      <tr><th>名前: </th><td><input type="text" name="name" value="{{$form->name}}"></td></tr>
      <tr><th>Mail: </th><td><input type="text" name="mail" value="{{$form->mail}}"></td></tr>
      <tr><th>年齢: </th><td><input type="text" name="age" value="{{$form->age}}"></td></tr>
      <tr><th>誕生日: </th><td><input type="text" name="birthday1" value="{{$form->birthday1}}"></td></tr>
      <tr><th>最終来店日: </th><td><input type="text" name="lastday" value="{{$form->lastday}}"></td></tr>
      <tr><th>来店回数: </th><td><input type="text" name="visitsnumber" value="{{$form->visitsnumber}}"></td></tr>
      <tr><th>支払い総額: </th><td><input type="text" name="amount" value="{{$form->amount}}"></td></tr>
      <tr><th></th><td><input type="submit" value="更新する"></td></tr>
    </table>
  </form>
@endsection

@section('footer')
  copyright Astore
@endsection
