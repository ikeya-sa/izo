@extends('layouts.visitor')

@section('style')
    <link href="{{ secure_asset('css/visitor/confirm.css') }}" rel="stylesheet">
@endsection

@section('content')
    <!-- メイン　Confirmエリア -->
    <div class="confirm">
        <div class="confirm-inner">
            <div class="confirm-title-text">
                <h2>ご入力内容のご確認</h2>
            </div>
            <hr>
            <div class="confirm-body">
                <p>
                ご入力いただいた内容にお間違えなければ、「送信」ボタンを押してください。
                </p>
            </div>
            <div class="form">
                <form action="{{ route('create') }}" method="post">
                    @csrf
                    <dl class="form-area">
                        <dt><label class="required">お名前（ハンドルネーム可）</label></dt>
                        <dd><input class="input-text" type="text" name="name" value="{{ session('contact.name') }}" readonly></dd>
                        <dt><label class="required">メールアドレス</label></dt>
                        <dd><input class="input-text" type="email" name="email" value="{{ session('contact.email') }}" readonly></dd>
                        <dt><label>お電話番号</label></dt>
                        <dd><input class="input-text" type="tel" name="tel" value="{{ session('contact.tel') }}" readonly></dd>
                        <dt><label>お問い合わせ種別</label></dt>
                        <dd><input class="select-box" type="text" name="genre" value="{{ session('contact.genre') }}" readonly></dd>
                        <dt><label class="required">お問い合わせ内容</label></dt>
                        <dd><textarea class="message" name="message" readonly>{{ session('contact.message') }}</textarea></dd>
                    </dl>
                    </div>
                    <!-- メイン　Confirmエリア -->
                    <div class="button-area">
                        <div class="confirm-button">
                            <button class="form-button" type="submit">送信</button>
                        </div>
                        <div class="back-button">
                            <button class="form-button" type="button" onclick="history.back();">戻る</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
