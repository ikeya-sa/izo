@extends('layouts.admin')

@section('title', 'Izo | 管理メニュー')

@section('style')
    <link href="{{ secure_asset('css/admin/contact/edit.css') }}" rel="stylesheet">
@endsection

@section('main-title', '問い合わせ編集')

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
        <form action="{{ route('admin.contact.edit') }}" method="post">
            @csrf
            <dl class="form-area">
                <dt><label>受付日</label></dt>
                <dd>{{ session('contact.created_at') }}</dd>
                <dt><label>名前</label></dt>
                <dd>{{ session('contact.name') }}</dd>
                <dt><label>メールアドレス</label></dt>
                <dd>{{ session('contact.email') }}</dd>
                <dt><label>電話番号</label></dt>
                <dd>{{ session('contact.tel') }}</dd>
                <dt><label>種別</label></dt>
                <dd>{{ session('contact.genre') }}</dd>
                <dt><label>内容</label></dt>
                <dd>{{ session('contact.message') }}</dd>
                <dt>前回更新者</dt>
                <dd>{{ session('contact.user_name') }}</dd>
                <dt>回答日</dt>
                <dd><input type="date" name="reply_date" value="{{ old('reply_date', $contact_form->reply_date) }}"></dd>
                <dt>回答記録</dt>
                <dd><textarea class="reply_notes" name="reply_notes">{{ old('reply_date', $contact_form->reply_date) }}</textarea></dd>
            </dl>
            <!-- メイン　ボタンエリア -->
            <div class="button-area">
                <div class="edit-button">
                    <input type="hidden" name="id" value="{{ $contact_form->id }}">
                    <button class="form-button" type="submit">更新</button>
                </div>
                <div class="back-button">
                    <button class="form-button" type="button" onclick="history.back();">戻る</button>
                </div>
            </div>
        </form>
    </div>
@endsection