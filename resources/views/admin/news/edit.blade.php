@extends('layouts.admin')

@section('title', 'Izo | 管理メニュー')

@section('style')
    <link href="{{ secure_asset('css/admin/news/edit.css') }}" rel="stylesheet">
@endsection

@section('main-title', 'News編集')

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
        <form action="{{ route('admin.news.edit') }}" method="post" enctype="multipart/form-data">
            @csrf
            <dl class="form-area">
                <dt><label>タイトル</label></dt>
                <dd><textarea class="title" name="title" required>{{ old('title', $news_form->title) }}</textarea></dd>
                <dt><label>本文</label></dt>
                <dd><textarea class="body" name="body" required>{{ old('body', $news_form->body) }}</textarea></dd>
                <dt><label>参照先1</label></dt>
                <dd><input class="input-text" type="text" name="ref_text_1" value="{{ old('ref_text_1', $news_form->ref_text_1) }}"></dd>
                <dt><label>参照先URL1</label></dt>
                <dd><input class="input-url" type="text" name="ref_url_1" value="{{ old('ref_url_1', $news_form->ref_url_1) }}"></dd>
                <dt><label>参照先2</label></dt>
                <dd><input class="input-text" type="text" name="ref_text_2" value="{{ old('ref_text_2', $news_form->ref_text_2) }}"></dd>
                <dt><label>参照先URL2</label></dt>
                <dd><input class="input-url" type="text" name="ref_url_2" value="{{ old('ref_url_2', $news_form->ref_url_2) }}"></dd>
                <dt><label>画像</label></dt>
                <dd><input type="file" class="image" name="image"></dd>
                <!-- php artisan storage:linkでシンボリックリンクが必要 -->
                @if ($news_form->image_path)
                    <dt><label></label></dt>
                    <dd><img class="image-display" src="{{ secure_asset('storage/image/' . $news_form->image_path) }}"></dd>
                @endif
            </dl>
            <!-- メイン　ボタンエリア -->
            <div class="button-area">
                <div class="edit-button">
                    <input type="hidden" name="id" value="{{ $news_form->id }}">
                    <button class="form-button" type="submit">更新</button>
                </div>
                <div class="back-button">
                    <button class="form-button" type="button" onclick="history.back();">戻る</button>
                </div>
            </div>
        </form>
    </div>
@endsection
