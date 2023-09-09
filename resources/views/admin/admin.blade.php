@extends('layouts.admin')

@section('title', 'Izo | 管理メニュー')

@section('style')
    <link href="{{ secure_asset('css/admin/admin.css') }}" rel="stylesheet">
@endsection

@section('main-title', 'Admin管理')

@section('content')
<!DOCTYPE HTML>
    <!-- メイン　ボタンエリア -->
    <div class="button-area">
        <div class="create-button">
            <button class="form-button" onclick="{{ route('admin.news.add') }}">新規登録</button>
        </div>
    </div>
    <!-- メイン　一覧エリア -->
    <div class="admin-list-area">
        <table class="admin-list">
            <caption class="list-name">Admin一覧</caption>
            <tr>
                <th class="th-id">ID</th>
                <th class="th-name">名前</th>
                <th class="th-email">メールアドレス</th>
                <th class="th-link">操作</th>
            </tr>
            <tr>
                <td class="td-id">1</td>
                <td class="td-name">Izo</td>
                <td class="td-email">neripapa16@gmail.com</td>
                <td class="td-link">
                    <!-- 未実装 -->
                    <a href="./admin/edit.html">編集</a><br>
                    <a href="./admin/delete.html">削除</a>
                </td>
            </tr>
            <tr>
                <td class="td-id">2</td>
                <td class="td-name">長い名前長い名前長い名前長い名前長い名前長い名前長い名前長い名前長い名前長い名前長い名前長い名前長い名前長い名前長い名前長い名前長い名前長い名前長い名前長い名前長い名前長い名前長い名前長い名前長い名前長い名前長い名前長い名前長い名前長い名前</td>
                <td class="td-email">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa@yahoo.co.jp</td>
                <td class="td-link">
                    <!-- 未実装 -->
                    <a href="./admin/edit.html">編集</a><br>
                    <a href="./admin/delete.html">削除</a>
                </td>
            </tr>
        </table>
        </div>
@endsection