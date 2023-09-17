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
                <form action="./confirm.html">
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
            </div>
            <!-- メイン　Confirmエリア -->
            <div class="button-area">
                <div class="confirm-button">
                    <button class="form-button" type="submit">送信</button>
                </div>
                <div class="back-button">
                    <button class="form-button" type="button" onclick="history.back();">戻る</button>
                </div>
            </div>
        </div>
    </div>
@endsection
