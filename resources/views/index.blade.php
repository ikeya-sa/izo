@extends('layouts.visitor')

@section('style')
    <link href="{{ secure_asset('css/visitor/index.css') }}" rel="stylesheet">
@endsection

@section('main-title', 'Izo Official Website')

@section('content')
    <!-- メイン　Newsエリア -->
    <article class="news">
        <div class="news-inner">
            <div class="news-title-text">
                <h2>News</h2>
            </div>
            <hr>
            <ul class="news-list">
                <li>
                    <div class="news-content">
                        <!-- 左右ブロックに分割 -->
                        <div class="news-left">
                            <p class="news-content-date">2023年08月26日</p>
                            <img src={{ secure_asset('images/top/news/0929.gif') }} class="news-content-img" alt="新着記事の画像">
                        </div>
                        <div class="news-right">
                            <h3 class="news-content-title">9/29（金）吉祥寺CRESCENDO「CLIFF'EM ALL 2023」出演決定！</h3>
                            <p class="news-content-body">Open 18:30 / Start 19:00 <br>◆ 来場チケット 前売 2500yen+Drink / 当日 3000yen+Drink <br>◆ 配信 2000yen<br>
                            &#9654;<a class="news-ref-link" href="https://passmarket.yahoo.co.jp/event/show/detail/02jnugv1uf831.html">来場はこちら</a><br>
                            &#9654;<a class="news-ref-link" href="https://twitcasting.tv/c:crescendo_live/shopcart/255959">配信はこちら</a></p>
                        </div>
                    </div>
                    <hr>
                </li>
                <li>
                    <div class="news-content">
                        <div class="news-left">
                            <p class="news-content-date">2023年07月08日</p>
                            <img src={{ secure_asset('images/top/news/0806.jpg') }} class="news-content-img" alt="新着記事の画像">
                        </div>
                        <div class="news-right">
                            <h3 class="news-content-title">8/6(日) 吉祥寺CRESCENDO「HIGH VOLTAGE」出演決定！</h3>
                            <p class="news-content-body">Open 18:00 / Start 18:30 <br>◆ 来場チケット 前売 3000yen+Drink / 当日 3500yen+Drink <br>◆ 配信 2500yen<br>
                            &#9654;<a class="news-ref-link" href="https://passmarket.yahoo.co.jp/event/show/detail/02j6cc1hve531.html">来場はこちら</a><br>
                            &#9654;<a class="news-ref-link" href="https://twitcasting.tv/c:crescendo_live/shopcart/246607">配信はこちら</a></p>
                        </div>
                    </div>
                    <hr>
                </li>
            </ul>
        </div>
    </article>
    <!-- メイン　YouTubeエリア -->
    <article class="movie">
        <div class="movie-inner">
            <div class="movie-title-text">
                <h2>YouTube</h2>
            </div>
            <hr>
            <ul class="movie-list">
                <li>
                    <div class="movie-content">
                        <iframe width="100%" height="auto" src="https://www.youtube.com/embed/r2M2thu71UQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <h3 class="movie-title">A Doggy's Journey Alone (Music Video)</h3>
                    </div>
                </li>
                <li>
                    <div class="movie-content">
                        <iframe width="100%" height="auto" src="https://www.youtube.com/embed/5IncJcC5-7k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <h3 class="movie-title">【GAME MUSIC】FINAL FANTASY V / ビッグブリッヂの死闘（CRASH ON THE BIG BRIDGE）【弾いてみた】</h3>
                    </div>
                </li>
                <li>
                    <div class="movie-content">
                        <iframe width="100%" height="auto" src="https://www.youtube.com/embed/PpHGJ4lCm5k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <h3 class="movie-title">Demonstration with Vega-Trem</h3>
                    </div>
                </li>
                <li>
                    <div class="movie-content">
                        <iframe width="100%" height="auto" src="https://www.youtube.com/embed/RmLcHSrYs4c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <h3 class="movie-title">【GAME MUSIC】Final Fantasy IV / バトル1 【弾いてみた】</h3>
                    </div>
                </li>
                <li>
                    <div class="movie-content">
                        <iframe width="100%" height="auto" src="https://www.youtube.com/embed/xrmy71oPaOo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <h3 class="movie-title">【GAME MUSIC】F-ZERO / STAGE 2.BIG BLUE【弾いてみた】</h3>
                    </div>
                </li>
                <li>
                    <div class="movie-content">
                        <iframe width="100%" height="auto" src="https://www.youtube.com/embed/4rFqCzw1pH8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <h3 class="movie-title">Fake Smile~Nightmare / Izo Solo Band</h3>
                    </div>
                </li>
            </ul>
        </div>
    </article>
@endsection
