@extends('layouts.admin')

@section('title', 'Izo | 管理メニュー')

@section('style')
    <link href="{{ secure_asset('css/admin/admin/admin_common.css') }}" rel="stylesheet">
@endsection

@section('main-title', 'Admin登録')

@section('content')
    <!-- メイン　入力エリア -->
    <div class="form">
        <!-- エラーメッセージ -->
        @if ($errors->any())
            <div class="error-message">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('admin.admin.create') }}" method="post">
            @csrf
            <dl class="form-area">
                <dt><label>名前</label></dt>
                <dd><input class="input-text" type="text" name="name" value="{{ old('name') }}" required autofocus></dd>
                <dt><label>メールアドレス</label></dt>
                <dd><input class="input-text" type="email" name="email" value="{{ old('email') }}" required></dd>
                <dt><label>パスワード</label></dt>
                <dd><input class="password" type="password" name="password" required></dd>
                <dt><label>パスワード（確認用）</label></dt>
                <dd><input class="password" type="password" name="password_confirmation" required></dd>
            </dl>
            <!-- メイン　ボタンエリア -->
            <div class="button-area">
                <div class="create-button">
                    <button class="form-button" type="submit">登録</button>
                </div>
                <div class="back-button">
                    <button class="form-button" type="button" onclick="history.back();">戻る</button>
                </div>
            </div>
        </form>
    </div>
@endsection