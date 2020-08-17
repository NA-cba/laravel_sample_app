@extends('layouts.helloapp')

@section('title','Person.index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <table>
  <tr><th>id</th><th>名前</th><th>Mail</th><th>年齢</th></tr>
  @foreach ($items as $item)
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->mail}}</td>
        <td>{{$item->age}}</td>
      </tr>
  @endforeach
  </table>
@endsection

@section('footer')
copyright 2020
@endsection
