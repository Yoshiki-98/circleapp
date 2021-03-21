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
    @if (Auth::check())
        <a class="button" href="/hello">ログイン致しました。</a>
        <a class="button" href="/board/add">情報を入力する。</a>
    @else
        <a class="button" href="/hello">ログアウト状態です。</a>
        <a class="button" href="/login">ログインする。</a>
    @endif 
    </div> 
@endsection
