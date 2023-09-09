@extends('layouts.admin')

@section('title', 'Izo | 管理メニュー')

@section('style')
    <link href="{{ secure_asset('css/admin/news/edit.css') }}" rel="stylesheet">
@endsection

@section('main-title', 'News登録')

@section('content')
    <div class="form">
        <!-- 未実装 -->
        <form action="../news.html" method="post">
            <dl class="form-area">
                <dt><label>タイトル</label></dt>
                <dd><textarea class="title" name="title" required></textarea></dd>
                <dt><label>本文</label></dt>
                <dd><textarea class="message" name="message" required></textarea></dd>
                <dt><label>画像</label></dt>
                <dd><input type="file" class="image" name="image">
            </dl>
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