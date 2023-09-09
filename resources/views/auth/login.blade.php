@extends('layouts.admin')

@section('title', 'Izo | ログイン')

@section('style')
    <link href="{{ secure_asset('css/admin/login.css') }}" rel="stylesheet">
@endsection

@section('header')
@endsection

@section('title-area') 
    <!-- タイトル -->
    <div class="title-area">
        <ul class="title-text">
            <li><h1>ログイン</h1></li>
        </ul>
    </div>
    <hr>
@endsection

@section('content')
    <!-- メイン　入力エリア -->
    <div class="form">
        <!-- 未実装 -->
        <form action="{{ route('login') }}" method="post">
            @csrf
            <dl class="form-area">
                <dt><label>メールアドレス</label></dt>
                <dd><input class="input-text{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email"  value="{{ old('email') }}" required autofocus></dd>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                <dt><label>パスワード</label></dt>
                <dd><input class="password{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" required></dd>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
            </dl>
            <div class="checkbox">
                <label><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>　ログイン情報を記憶する</label>
            </div>
            <!-- メイン　ボタンエリア -->
            <div class="button-area">
                <div class="login-button">
                    <button class="form-button" type="submit">ログイン</button>
                </div>
            </div>
        </form>
    </div>
@endsection
