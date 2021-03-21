@extends('layouts.app')

@section('header')
<div class="container">
    <div class="header-left">
        <a href="/hello"><img class="logo" src="/images/circle.png"></a>
    </div>
    <div class="header-right">
    @if (Auth::check())
    <a href="/board/add" class="user"><span class="fa fa-user"></span>{{$user->name . ' (' . $user->email . ')'}}</a>
    @else
    <a href="/login" class="login">ログイン</a>
    <a href="/register" class="register">新規登録</a>
    @endif
    @guest
    @else
    <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    @endguest
</div>
@endsection

@section('content')
<div class="container">
    <table>
    <form action="/board/del" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$form->id}}">
        <div class="a_form">
            <label class="dr">所属大学名 : </label>
            {{$form->univ}}
        </div>
        <div class="a_form">
            <label class="dr">所属サークル名 : </label>
            {{$form->circle}}
        </div>
        <div class="a_form">
            <label class="dr">スポーツ（例：バレーボール）: </label>
            {{$form->sports}}
        </div>
        <div class="a_form">
            <label class="dr">活動地域（例：京都市東山区）: </label>
            {{$form->area}}
        </div>
        <div class="a_form">
            <label class="dr">サークルホームページ URL : </label>
            {{$form->url}}
        </div>
        <div class="a_form">
            <input type="submit" value="削除する">
        </div>
    </form>    
    </table>
</div>    
@endsection