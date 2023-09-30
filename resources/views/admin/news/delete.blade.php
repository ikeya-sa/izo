@extends('layouts.admin')

@section('title', 'Izo | 管理メニュー')

@section('style')
    <link href="{{ secure_asset('css/admin/news/news_common.css') }}" rel="stylesheet">
@endsection

@section('main-title', 'News削除')

@section('content')
    <!-- メイン　入力エリア -->
    <div class="form">
        <dl class="form-area">
            <dt><label>タイトル</label></dt>
            <dd>{{ $news_form->title }}</dd>
            <dt><label>本文1</label></dt>
            <dd>{{ $news_form->body_1 }}</dd>
        </dl>
        <p class="confirm-message">この新着記事を削除しますか？</p>
        <!-- メイン　ボタンエリア -->
        <div class="button-area">
            <div class="delete-button">
                <form action="{{ route('admin.news.destroy') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $news_form->id }}">
                    <button class="form-button" type="submit">削除</button>
                </form>    
            </div>
            <div class="back-button">
                <button class="form-button" type="button" onclick="history.back();">戻る</button>
            </div>
            </div>
        </form>
    </div>
@endsection
