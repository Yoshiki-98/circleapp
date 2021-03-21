@extends('layouts/helloapp')

@section('title', 'Index')  

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

@if(isset($items))
    @section('content')
    <div class="container">
        @if ($items->count()==0)
            <h2>検索条件に合う情報はありません。</h2>
        @else
            <table>
            <tr><th>Circle_Information</th><th>User</th></tr>
            @foreach ($items as $item)
                <tr>
                    <td><a class="item" href="{{$item->url}}">{{$item->getData()}}</a></td>
                    <td><a class="person" href="#">{{$item->user->name}}</a></td>
                </tr>
            @endforeach
            </table>
            {{ $items->links() }}
        @endif    
    </div>    
    @endsection   

@else
    @section('top-wrapper')
    <div class="container">
        <h1>練習試合をもっと気軽に。</h1>
        <p>サーカレ！は練習試合マッチングサービスです。<br>今の部活動・サークル活動がもっと盛り上がる様なサービスを提供します。他チームと、もっと気軽に交流を！</p>
        <form action="/hello" method="post">
            {{ csrf_field() }}
            <div class="forms">
                <label class="form-tag">
                    <span class="fa fa-bicycle"></span>
                    <input type="text" name="sports" autocomplete="off" placeholder="競技名" value="" list="sports">
                    <datalist id="sports">
                    <option value="野球">
                    <option value="サッカー">
                    <option value="バレーボール">
                    <option value="テニス">
                    <option value="バスケットボール">
                    <option value="卓球">
                    <option value="バトミントン">
                    <option value="ラグビー">
                    <option value="ドッジボール">
                    <option value="ボクシング">
                    <option value="ゴルフ">
                    <option value="フットサル">
                    </datalist><br>
                </label>
                <label class="form-tag">
                    <span class="fa fa-map-marker"></span>
                    <input type="text" name="area" autocomplete="off" placeholder="エリア・駅" value="" list="kyoto">
                    <datalist id="kyoto">
                    <option value="左京区">
                    <option value="右京区">
                    <option value="上京区">
                    <option value="下京区">
                    <option value="中京区">
                    <option value="北区">
                    <option value="東山区">
                    <option value="南区">
                    <option value="西京区">
                    <option value="山科区">
                    <option value="伏見区">
                    </datalist><br>
                </label>
                <label class="form-tag">
                    <span class="fa fa-university"></span>
                    <input type="text" name="univ" autocomplete="off" placeholder="大学名" value="" list="univ">
                    <datalist id="univ">
                    <option value="京都大学">
                    <option value="京都教育大学">
                    <option value="京都工芸繊維大学">
                    <option value="京都府立大学">
                    <option value="京都府立医科大学">
                    <option value="京都市立芸術大学">
                    <option value="福知山公立大学">
                    <option value="大谷大学">
                    <option value="京都医療科学大学">
                    <option value="京都外国語大学">
                    <option value="京都先端科学大学">
                    <option value="京都華頂大学">
                    <option value="京都看護大学">
                    <option value="京都芸術大学">
                    <option value="京都光華女子大学">
                    <option value="京都産業大学">
                    <option value="京都女子大学">
                    <option value="京都精華大学">
                    <option value="京都橘大学">
                    <option value="京都ノートルダム女子大学">
                    <option value="京都美術工芸大学">
                    <option value="京都文教大学">
                    <option value="京都薬科大学">
                    <option value="嵯峨美術大学">
                    <option value="種智院大学">
                    <option value="同志社女子大学">
                    <option value="同志社大学">
                    <option value="花園大学">
                    <option value="佛教大学">
                    <option value="平安女学院大学">
                    <option value="明治国際医療大学">
                    <option value="立命館大学">
                    <option value="龍谷大学">
                    <option value="池坊短期大学">
                    <option value="華頂短期大学">
                    <option value="京都外国語短期大学">
                    <option value="京都経済短期大学">
                    <option value="京都光華女子大学短期大学部">
                    <option value="京都西山短期大学">
                    <option value="京都文教短期大学">
                    <option value="嵯峨美術短期大学">
                    <option value="龍谷大学短期大学部">
                    </datalist><br>
                </label>
                <label class="form-tag">
                    <span class="fa fa-trophy"></span>
                    <input type="text" name="circle" autocomplete="off" placeholder="チーム名・サークル名" value="">
                </label>
                <label class="form-tag">
                    <span class="fa fa-calendar"></span>
                    <input type="date" name="date" placeholder="日付">
                </label>
                <label class="form-tag">
                    <input type="submit" value="検索する">
                </label>
            </div>
        </form>
    </div>
    @endsection

@endif    
