@extends('layouts.admin')

@section('title', 'Izo | 管理メニュー')

@section('style')
    <link href="{{ secure_asset('css/admin/contact.css') }}" rel="stylesheet">
@endsection

@section('main-title', '問い合わせ管理')

@section('content')
    <!-- メイン　一覧エリア -->
    <div class="contact-list-area">
        <table class="contact-list">
            <caption class="list-name">問い合わせ一覧</caption>
            <tr>
                <th class="th-id">ID</th>
                <th class="th-contact-date">受付日</th>
                <th class="th-reply-date">回答日</th>
                <th class="th-name">名前</th>
                <th class="th-genre">種別</th>
                <th class="td-message">内容</th>
            </tr>
            <tr>
                <!-- 未実装 -->
                <td class="td-id"><a href="./contact/edit.html">3</a></td>
                <td class="td-contact-date">2023/8/31</td>
                <td class="td-reply-date">2023/9/1</td>
                <td class="td-name">〇山×男</td>
                <td class="td-genre">サポート演奏のご依頼・ご相談</td>
                <td class="td-message">問い合わせ文問い合わせ文問い合わせ文問い合わせ文問い合わせ文問い合わせ文問い合わせ文問い合わせ文問い合わせ文問い合わせ文問い合わせ文問い合わせ文問い合わせ文問い合わせ文問い合わせ文問い合わせ文問い合わせ文問い合わせ文問い合わせ文問い合わせ文</td>
            </tr>
            <tr>
                <td class="td-id"><a href="./contact/edit.html">2</a></td>
                <td class="td-contact-date">2023/8/25</td>
                <td class="td-reply-date"></td>
                <td class="td-name">T.I</td>
                <td class="td-genre">レッスンのご依頼・ご相談</td>
                <td class="td-message">問い合わせ文問い合わせ文問い合わせ文問い合わせ文問い合わせ文問い合わせ文問い合わせ文問い合わせ文問い合わせ文問い合わせ文問い合わせ文問い合わせ文</td>
            </tr>
            <tr>
                <td class="td-id"><a href="./contact/edit.html">1</a></td>
                <td class="td-contact-date">2023/8/14</td>
                <td class="td-reply-date">2023/8/18</td>
                <td class="td-name">VVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVV</td>
                <td class="td-genre"></td>
                <td class="td-message">問い合わせ文問い合わせ文問い合わせ文問い合わせ文問い合わせ文問い合わせ文問い合わせ文</td>
            </tr>
        </table>
    </div>
@endsection