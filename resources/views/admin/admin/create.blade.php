@extends('layouts.admin')

@section('title', 'Izo | 管理メニュー')

@section('style')
    <link href="{{ secure_asset('css/admin/create.css') }}" rel="stylesheet">
@endsection

@section('main-title', 'Admin登録')

@section('content')
    <!-- メイン　入力エリア -->
    <div class="form">
        <!-- 未実装 -->
        <form action="{{ secure_asset('admin.html') }}" method="post">
            <dl class="form-area">
                <dt><label>名前</label></dt>
                <dd><input class="input-text" type="text" name="name" required></dd>
                <dt><label>メールアドレス</label></dt>
                <dd><input class="input-text" type="email" name="email" required></dd>
                <dt><label>パスワード</label></dt>
                <dd><input class="password" type="password" name="password" required></dd>
                <dt><label>パスワード（確認用）</label></dt>
                <dd><input class="password" type="password" name="password_2" required></dd>
        </form>
    </div>
    <!-- メイン　ボタンエリア -->
    <div class="button-area">
        <div class="create-button">
            <button class="form-button" type="submit">登録</button>
        </div>
        <div class="back-button">
            <button class="form-button" type="button" onclick="history.back();">戻る</button>
        </div>
    </div>
@endsection