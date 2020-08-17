@extends('layouts.helloapp')
    <style>
      .pagination { font-size:10pt; }
      .pagination li { display:inline-block }
      </style>
@section('title','データの一覧')

@section('menubar')
  @parent
  <a href="/hello/add">データを新規作成する</a>
@endsection

@section('content')

  @if (Auth::check())
    <p>現在ログインしているユーザー名(Mail): {{$user->name . '(' . $user->email . ')'}}</p>
    <p>
      <a href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
          {{ __('ログアウトする') }}
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
    </p>
  @else
    <p>※ログインしてません。(<a href="/login">ログイン</a>|<a href="/register">新規ユーザー登録</a>)</p>
  @endif

  <table>
    <tr>
      <th>名前</th>
      <th>Mail</th>
      <th>年齢</th>
      <th>誕生日</th>
      <th>最終来店日</th>
      <th>来店回数</th>
      <th>支払い総額</th>
      <th></th>
      <th></th>
    </tr>

    @foreach ($items as $item)
    <tr>
      <td>{{$item->name}}</td>
      <td>{{$item->mail}}</td>
      <td>{{$item->age}}</td>
      <td>{{$item->birthday1}}</td>
      <td>{{$item->lastday}}</td>
      <td>{{$item->visitsnumber}}</td>
      <td>{{$item->amount}}</td>
      <td><a href = 'hello/edit/?id={{ $item->id }}'>更新</a></td>
      <td><a href = 'hello/del/?id={{ $item->id }}'>削除</a></td>
    </tr>
    @endforeach
  </table>
  {{$items->links()}}

@endsection

@section('footer')
  copyright 2020
@endsection
