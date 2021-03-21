@extends('layouts/helloapp')

@section('title', 'Board/index')

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
    <tr><th>Circle_Information</th><th>User</th></tr>
    @foreach ($items as $item)
        <tr>
            <td><a class="item" href="{{$item->url}}">{{$item->getData()}}</a></td>
            <td><a class="person" href="#">{{$item->user->name}}</a></td>
            <!--↑"user"にチャット機能を持ったページを実装したい -->
        </tr>
    @endforeach
    </table>
    {{ $items->links() }}
</div>
@endsection