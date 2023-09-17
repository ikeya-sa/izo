@extends('layouts.visitor')

@section('style')
    <link href="{{ secure_asset('css/visitor/about.css') }}" rel="stylesheet">
@endsection

@section('main-title', 'About Izo')

@section('content')
    <!-- メイン　Profileエリア -->
    <article class="profile">
        <div class="profile-inner">
            <div class="profile-title-text">
                <h2>Profile</h2>
            </div>
            <hr>
            <div class="profile-body">
            <p>
            過去にAXBITES～VALTHUS～ANCIENT MYTH、そしてVeiled in Scarletにて活動をしていたギタリスト「Izo（イゾー）」。<br>
            現在活動しているソロではHR/HM系のみならず、幅広いジャンルとメロディ・ラインでインストゥルメンタル曲を奏でる。
            </p>
            </div>
        </div>
    </article>
    <!-- メイン　活動履歴エリア -->
    <article class="history">
        <div class="history-inner">
            <div class="history-title-text">
                <h2>活動履歴</h2>
            </div>
            <hr>
            <div class="history-body">
            <p>
            山口県は宇部市出身、萩市育ち（父方祖父母は鹿児島出身）。<br>
            10代から親の転勤で広島市にて過ごす。<br>
            20代になる年、音楽を志て上京。<br>
            色々なバンドやサポート等をこなしながら現在に至る。
            </p>
            </div>
        </div>
    </article>
    <!-- メイン　メディア出演・掲載実績エリア -->
    <article class="media">
        <div class="media-inner">
            <div class="media-title-text">
                <h2>メディア出演・掲載実績</h2>
            </div>
            <hr>
            <ul class="media-body">
                <li>
                    2020年06月　シンコーミュージック・エンタテイメント
                    <a href=https://youngguitar.jp/yg/yg-202007 target="_blank">「ヤング・ギター2020年7月号」</a>
                    ”俺流”ピック選択のススメ（デモンストレーター）<br>
                    <hr>
                </li>
                <li>
                    2021年04月　シンコーミュージック・エンタテイメント
                    <a href=https://youngguitar.jp/yg/yg-202105 target="_blank">「ヤング・ギター2021年5月号」</a>
                    炎の”ゲイリー・ムーア”愛（トークゲスト）<br>
                    <span class="media-ref-link">&#9654;<a href="https://youtu.be/nKtn3jRdH8M" target="_blank">YouTube動画はこちら</a></span><br>
                    <hr>
                </li>
                <li>
                    2021年06月　シンコーミュージック・エンタテイメント
                    <a href=https://youngguitar.jp/yg/yg-202107 target="_blank">「ヤング・ギター2021年7月号」</a>
                    POD Go wireless特集記事（デモンストレーター）<br>
                    <span class="media-ref-link">&#9654;<a href="https://youtu.be/6Qu5hk7FyUw" target="_blank">YouTube動画はこちら</a></span><br>
                    <hr>
                </li>
                <li>
                    2021年08月　ヤマハミュージックジャパン
                    <a href="https://line6.jp/blog/6722/" target="_blank">「POD Go Artists」</a>
                    （アーティストインタビュー）<br>
                    <hr>
                </li>
                <li>
                    2021年12月　BIG BOSS お茶の水駅前店「Line6 HX Stomp XLウェビナー」（デモンストレーター）
                    <hr>
                </li>
            </ul>
        </div>
    </article>
@endsection
