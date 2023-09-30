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
                @foreach($posts as $post)
                    <li>
                        <div class="news-content">
                            <!-- 左右ブロックに分割 -->
                            <div class="news-left">
                                <p class="news-content-date">{{ $post->created_at->format('Y年m月d日') }}</p>
                                <div class="image-display">
                                    @if ($post->image_path)
                                        <img src="{{ secure_asset('storage/image/' . $post->image_path) }}" alt="新着記事の画像">
                                    @endif
                                </div>
                            </div>
                            <div class="news-right">
                                <h3 class="news-content-title">{{ $post->title }}</h3>
                                <p class="news-content-body">{{ $post->body_1 }}<br>
                                @if ($post->body_2)
                                {{ $post->body_2 }}<br>
                                @endif
                                @if ($post->body_3)
                                {{ $post->body_3 }}<br>
                                @endif
                                @if ($post->body_4)
                                {{ $post->body_4 }}<br>
                                @endif
                                @if ($post->ref_url_1)
                                    &#9654;<a class="news-ref-link-1" href="{{ $post->ref_url_1 }}" target="_blank">{{ $post->ref_text_1 }}</a>
                                @endif
                                @if ($post->ref_url_2)
                                    <br>
                                    &#9654;<a class="news-ref-link" href="{{ $post->ref_url_2 }}" target="_blank">{{ $post->ref_text_2 }}</a>
                                @endif
                                @if ($post->ref_url_3)
                                    <br>
                                    &#9654;<a class="news-ref-link" href="{{ $post->ref_url_3 }}" target="_blank">{{ $post->ref_text_3 }}</a>
                                @endif
                                </p>
                            </div>
                        </div>
                        <hr>
                    </li>
                @endforeach
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
