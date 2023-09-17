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
        <table class="news-list">
            <caption class="list-name">News一覧</caption>
            <tr>
                <th class="th-id">ID</th>
                <th class="th-news-date">掲載日</th>
                <th class="th-title">タイトル</th>
                <th class="th-body">本文</th>
                <th class="th-link">操作</th>
            </tr>
            <tr>
                <td class="td-id">1</td>
                <td class="td-news-date">2023/8/31</td>
                <td class="td-title">タイトル1</td>
                <td class="td-body">説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文</td>
                <td class="td-link">
                    <!-- 未実装 -->
                    <a href="./news/edit.html">編集</a><br>
                    <a href="./news/delete.html">削除</a>
                </td>
            </tr>
            <tr>
                <td class="td-id">2</td>
                <td class="td-news-date">2023/8/25</td>
                <td class="td-title">タイトル2</td>
                <td class="td-body">説明文説明文説明文説明文説明文説明文説明文</td>
                <td class="td-link">
                    <!-- 未実装 -->
                    <a href="./news/edit.html">編集</a><br>
                    <a href="./news/delete.html">削除</a>
                </td>
            </tr>
            <tr>
                <td class="td-id">3</td>
                <td class="td-news-date">2023/8/14</td>
                <td class="td-title">タイトル3</td>
                <td class="td-body">説明文説明文説明文</td>
                <td class="td-link">
                    <!-- 未実装 -->
                    <a href="./news/edit.html">編集</a><br>
                    <a href="./news/delete.html">削除</a>
                </td>
            </tr>
        </table>
    </div>
@endsection