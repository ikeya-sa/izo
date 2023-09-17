@extends('layouts.admin')

@section('title', 'Izo | 管理メニュー')

@section('style')
    <link href="{{ secure_asset('css/admin/news/create.css') }}" rel="stylesheet">
@endsection

@section('main-title', 'News登録')

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
        <form action="{{ route('admin.news.create') }}" method="post" enctype="multipart/form-data">
            @csrf
            <dl class="form-area">
                <dt><label>タイトル</label></dt>
                <dd><textarea class="title" name="title" required></textarea>{{ old('title') }}</dd>
                <dt><label>本文</label></dt>
                <dd><textarea class="body" name="body" required>{{ old('body') }}</textarea></dd>
                <dt><label>参照先1</label></dt>
                <dd><input class="input-text" type="text" name="ref_text_1"></dd>
                <dt><label>参照先URL1</label></dt>
                <dd><input class="input-url" type="text" name="ref_url_1"></dd>
                <dt><label>参照先2</label></dt>
                <dd><input class="input-text" type="text" name="ref_text_2"></dd>
                <dt><label>参照先URL2</label></dt>
                <dd><input class="input-url" type="text" name="ref_url_2"></dd>
                <dt><label>画像</label></dt>
                <dd><input type="file" class="image" name="image"></dd>
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
