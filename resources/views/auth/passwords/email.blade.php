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
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
