@extends('layouts.admin')

@section('title', 'Izo | 管理メニュー')

@section('style')
    <link href="{{ secure_asset('css/admin/news.css') }}" rel="stylesheet">
@endsection

@section('main-title', 'News管理')

@section('content')
    <!-- メイン　ボタンエリア -->
    <div class="button-area">
        <div class="create-button">
            <a href="{{ route('admin.news.add') }}">
                <button class="form-button" type="button">新規登録</button>
            </a>
        </div>
    </div>
    <!-- メイン　一覧エリア -->
    <div class="news-list-area">
        @if (session('create-success'))
            <div class="success-message">
            {{ session('create-success') }}
            </div>
            @elseif (session('update-success'))
            <div class="success-message">
            {{ session('update-success') }}
            </div>
            @elseif (session('delete-success'))
            <div class="success-message">
            {{ session('delete-success') }}
            </div>
        @endif
        <table class="news-list">
            <caption class="list-name">News一覧</caption>
            <thead>
            <tr>
                <th class="th-id">ID</th>
                <th class="th-news-date">掲載日</th>
                <th class="th-title">タイトル</th>
                <th class="th-body">本文</th>
                <th class="th-link">操作</th>
            </tr>
            </thead>
            <tbody>
                @foreach($posts as $news)
                    <tr>
                        <td class="td-id">{{ $news->id }}</td>
                        <td class="td-news-date">{{ $news->created_at->format('Y-m-d') }}</td>
                        <td class="td-title">{{ Str::limit($news->title, 30) }}</td>
                        <td class="td-body">{{ Str::limit($news->body, 150) }}</td>
                        <td class="td-link">
                            <a href="{{ route('admin.news.edit', ['id' => $news->id]) }}">編集</a><br>
                            <a href="{{ route('admin.news.delete', ['id' => $news->id]) }}">削除</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
