@extends('layouts.admin')

@section('title', 'Izo | 管理メニュー')

@section('style')
    <link href="{{ secure_asset('css/admin/admin/delete.css') }}" rel="stylesheet">
@endsection

@section('main-title', 'Admin削除')

@section('content')
    <!-- メイン　入力エリア -->
    <div class="form">
        <dl class="form-area">
            <dt><label>名前</label></dt>
            <dd>{{ $admin_form->name }}</dd>
            <dt><label>メールアドレス</label></dt>
            <dd>{{ $admin_form->email }}</dd>
        </dl>
        <p class="confirm-message">この管理者を削除しますか？</p>
        <!-- メイン　ボタンエリア -->
        <div class="button-area">
            <div class="delete-button">
                <form action="{{ route('admin.admin.destroy', ['id' => $admin_form->id]) }}" method="post">
                    @csrf 
                    <button class="form-button" type="submit">削除</button>
                </form>
            </div>
            <div class="back-button">
                <button class="form-button" type="button" onclick="history.back();">戻る</button>
            </div>
        </div>
    </div>
@endsection