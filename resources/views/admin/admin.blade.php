@extends('layouts.admin')

@section('title', 'Izo | 管理メニュー')

@section('style')
    <link href="{{ secure_asset('css/admin/admin.css') }}" rel="stylesheet">
@endsection

@section('main-title', 'Admin管理')

@section('content')
    <!-- メイン　ボタンエリア -->
    <div class="button-area">
        <div class="create-button">
            <a href="{{ route('admin.admin.add') }}">
                <button class="form-button" type="button">新規登録</button>
            </a>
        </div>
    </div>
    <!-- メイン　一覧エリア -->
    <div class="admin-list-area">
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
        <table class="admin-list">
            <caption class="list-name">Admin一覧</caption>
            <thead>
            <tr>
                <th class="th-id">ID</th>
                <th class="th-name">名前</th>
                <th class="th-email">メールアドレス</th>
                <th class="th-link">操作</th>
            </tr>
            </thead>
            <tbody>
                @foreach($posts as $admin)
                    <tr>
                        <td class="td-id">{{ $admin->id }}</td>
                        <td class="td-name">{{ $admin->name }}</td>
                        <td class="td-email">{{ $admin->email }}</td>
                        <td class="td-link">
                            <a href="{{ route('admin.admin.edit', ['id' => $admin->id]) }}">編集</a><br>
                            <a href="{{ route('admin.admin.delete', ['id' => $admin->id]) }}">削除</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection