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
    @if(isset($hasItems))
    <div class="container">
        <a class="button" href="/board/edit">入力情報を修正する</a>
        <a class="button" href="/board/del">入力情報を削除する</a>
    </div>  
    @else
    <div class="container">
        @if (count($errors) > 0)
        <h2>入力に問題があります。再入力してください。</h2>
        @endif
        <table>
        <form action="/board/edit" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$board->id}}">
            <div class="a_form">
                @if ($errors->has('univ'))
                <label class="dr">{{$errors->first('univ')}}</label>
                @else
                <label class="dr">所属大学名 : </label>
                @endif
                <input type="text" name="univ" class="circle-info" autocomplete="off" placeholder="大学名" value="{{$board->univ}}" list="univ">
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
            </div>
            <div class="a_form">
                @if ($errors->has('circle'))
                <label class="dr">{{$errors->first('circle')}}</label>
                @else
                <label class="dr">所属サークル名 : </label>
                @endif
                <input type="text" name="circle" class="circle-info" autocomplete="off" placeholder="サークル" value="{{$board->circle}}">
            </div>
            <div class="a_form">
                @if ($errors->has('sports'))
                <label class="dr">{{$errors->first('sports')}}</label>
                @else
                <label class="dr">スポーツ（例：バレーボール）: </label>
                @endif
                <input type="text" name="sports" class="circle-info" autocomplete="off" placeholder="競技名" value="{{$board->sports}}" list="sports">
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
            </div>
            <div class="a_form">
                @if ($errors->has('area'))
                <label class="dr">{{$errors->first('area')}}</label>
                @else
                <label class="dr">活動地域（例：京都市東山区）: </label>
                @endif
                <input type="text" name="area" class="circle-info"　autocomplete="off" placeholder="活動地域" value="{{$board->area}}" list="kyoto">
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
            </div>
            <div class="a_form">
                <label class="dr">サークルホームページ URL : </label>
                <input type="text" name="url" class="circle-info"　autocomplete="off" placeholder="URL" value="{{$board->url}}">
            </div>
            <p>※URL以外の情報は必ず入力してください。</p>
            <div class="a_form">
                <input type="submit" value="送信する">
            </div>
        </form>    
        </table>
    </div>    
    @endif
@endsection
