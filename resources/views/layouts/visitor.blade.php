<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>Izo | Journeyman</title>
        <meta name="description" content="関東を拠点に活動しているソロギタリスト「Izo」のOffiial Web Siteです。ライブ情報や配信の告知など行っていきます。">
        
        <!-- Scripts -->
        <script src="./js/toggle-menu.js"></script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ secure_asset('css/visitor/common.css') }}" rel="stylesheet">
        @yield('style')

        <!-- OGP -->
        <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
        <meta property="og:url" content="#" />
        <meta property="og:type" content="#" />
        <meta property="og:title" content="Izo | Journeyman" />
        <meta property="og:description" content="関東を拠点に活動しているソロギタリスト「Izo」のOffiial Web Siteです。ライブ情報や配信の告知など行っていきます。" />
        <meta property="og:site_name" content="Izo | Journeyman" />
        <meta property="og:image" content="#" />
    </head>
    <body>
        <!-- 共通ヘッダー -->
        <header class="header">
            <div class="header-inner">
                <a class="header-logo" href="./index.html">
                    <img src="./images/common/logo-header.png" alt="Izo Journeyman">
                </a>
                <nav class="site-menu">
                    <ul class="site-menu-link">
                        <li><a href="{{ route('index') }}">Top</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('discography') }}">Discography</a></li>
                        <li><a href="https://ameblo.jp/izo/" target="_blank">Blog</a></li>
                        <li><a href="{{ route('lesson') }}">Lesson</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>    
                </nav>
                <div class="header-sns">
                    <ul class="sns-link">
                        <li><a href="https://twitter.com/Izo_Journeyman" target="_blank"><img src="images/common/logo_tw.png" width="20" height="20" alt="twitter"></a></li>
                        <li><a href="https://www.facebook.com/IzoSoloArtist" target="_blank"><img src="images/common/logo_fb.png" width="20" height="20" alt="Facebook"></a></li>
                        <li><a href="https://instagram.com/izo_journeyman?igshid=MzRlODBiNWFlZA==" target="_blank"><img src="images/common/logo_insta.png" width="20" height="20" alt="Instagram"></a></li>
                    </ul>
                </div>
                <button class="toggle-menu-button"></button>
            </div>
        </header>
        <main class="main">
            <!-- タイトル -->
            <div class="main-title-inner">
                <div class="main-title-text">
                    <h1>@yield('main-title')</h1>
                </div>    
            </div>
            @yield('content')
        </main>
        <!-- 共通フッター -->
        <footer class="footer">
            <div class="footer-inner">
                <div class="footer-sns">
                    <ul class="sns-link">
                        <li><a href="https://twitter.com/Izo_Journeyman" target="_blank"><img src="images/common/logo_tw.png" width="20" height="20" alt="twitter"></a></li>
                        <li><a href="https://www.facebook.com/IzoSoloArtist" target="_blank"><img src="images/common/logo_fb.png" width="20" height="20" alt="Facebook"></a></li>
                        <li><a href="https://instagram.com/izo_journeyman?igshid=MzRlODBiNWFlZA==" target="_blank"><img src="images/common/logo_insta.png" width="20" height="20" alt="Instagram"></a></li>
                    </ul>
                </div>
                <p class="copyright"><small>&copy; 2023 Izo All Rights Reserved.</small></p>
            </div>
        </footer>
    </body>
</html>