@extends('layouts.visitor')

@section('style')
    <link href="{{ secure_asset('css/visitor/thanks.css') }}" rel="stylesheet">
@endsection

@section('content')
    <!-- メイン　Thanksエリア -->
    <div class="thanks">
        <div class="thanks-inner">
            <div class="thanks-title-text">
                <h2>お問い合わせいただきありがとうございます。</h2>
            </div>
            <hr>
            <div class="thanks-body">
                <p>
                お問い合わせ受付確認メールを送信いたしました。<br>
                迅速な対応を心がけておりますが、万が一返信がない場合は、お手数ですが再度ご連絡いただけますと幸いです。
                </p>
            </div>
        </div>
    </div>
@endsection
