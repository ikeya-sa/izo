@extends('layouts.visitor')

@section('style')
    <link href="{{ secure_asset('css/visitor/contact.css') }}" rel="stylesheet">
@endsection

@section('content')
    <!-- メイン　Contactエリア -->
    <div class="contact">
        <div class="contact-inner">
            <div class="contact-title-text">
                <h2>サポート演奏、レッスン、セミナー、製品レビューなど<br>
                ギターに関することはお気軽にお問い合わせください。</h2>
            </div>
            <hr>
            <div class="contact-body">
                <p>
                お問い合わせ内容を下記フォームにご入力いただき、「確認」ボタンを押してください。</br>
                <span>※</span>は必須項目です。
                </p>
            </div>
            <div class="form">
                <form action="./confirm.html" method="post">
                    <dl class="form-area">
                        <dt><label class="required">お名前（ハンドルネーム可）</label></dt>
                        <dd><input class="input-text" type="text" name="name" required></dd>
                        <dt><label class="required">メールアドレス</label></dt>
                        <dd><input class="input-text" type="email" name="email" required></dd>
                        <dt><label>お電話番号（ハイフン不要）</label></dt>
                        <dd><input class="input-text" type="tel" name="tel"></dd>
                        <dt><label>お問い合わせ種別</label></dt>
                            <dd>
                                <select class="select-box" name="genre">
                                    <option value="サポート演奏のご依頼・ご相談">サポート演奏のご依頼・ご相談</option>
                                    <option value="レッスンのご依頼・ご相談">レッスンのご依頼・ご相談</option>
                                    <option value="セミナーのご依頼・ご相談">セミナーのご依頼・ご相談</option>
                                    <option value="製品レビューのご依頼・ご相談">製品レビューのご依頼・ご相談</option>
                                    <option value="Izoの活動に関するご質問">Izoの活動に関するご質問</option>
                                    <option value="その他">その他</option>
                                </select>
                            </dd>
                        <dt><label class="required">お問い合わせ内容</label></dt>
                        <dd><textarea class="message" name="message" required></textarea></dd>
                    </dl>
                </form>
                <!-- メイン　ボタンエリア -->
                <div class="button-area">
                    <div class="contact-button">
                        <button class="form-button" type="submit">確認</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
