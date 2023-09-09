@extends('layouts.admin')

@section('title', 'Izo | 管理メニュー')

@section('style')
    <link href="{{ secure_asset('css/admin/contact/edit.css') }}" rel="stylesheet">
@endsection

@section('main-title', '問い合わせ編集')

@section('content')
    <!-- メイン　入力エリア -->
    <div class="form">
        <!-- 未実装 -->
        <form action="../contact.html" method="post">
            <dl class="form-area">
                <dt>受付日</dt>
                <dd>2023/8/31</dd>
                <dt>名前</dt>
                <dd>〇山×男</dd>
                <dt>メールアドレス</dt>
                <dd>aaabbbccc@gmail.com</dd>
                <dt>電話番号</dt>
                <dd>09009090909</dd>
                <dt>種別</dt>
                <dd>サポート演奏のご依頼・ご相談</dd>
                <dt>内容</dt>
                <dd>問い合わせ本文問い合わせ本文問い合わせ本文問い合わせ本文問い合わせ本文問い合わせ本文問い合わせ本文問い合わせ本文問い合わせ本文問い合わせ本文問い合わせ本文問い合わせ本文問い合わせ本文</dd>
                <dt>前回更新者</dt>
                <dd>Izo</dd>
                <dt>回答日</dt>
                <dd><input type="date" name="reply_date"></dd>
                <dt>回答記録</dt>
                <dd><textarea class="reply_notes" name="reply_notes"></textarea></dd>
            </dl>
        </form>
    </div>
    <!-- メイン　ボタンエリア -->
    <div class="button-area">
        <div class="edit-button">
            <button class="form-button" type="submit">更新</button>
        </div>
        <div class="back-button">
            <button class="form-button" type="button" onclick="history.back();">戻る</button>
        </div>
    </div>
@endsection