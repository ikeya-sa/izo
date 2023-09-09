<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Scripts adminには不要 -->

        <!-- Fonts adminには不要 -->

        <!-- Styles -->
        <link href="{{ secure_asset('css/admin/common.css') }}" rel="stylesheet">
        @yield('style')
    </head>
    <body>
        @section('header')
        <header class="header">
            <div class="header-inner">
                <ul class="site-menu-link">
                    <li><a href="{{ route('admin.index') }}">管理メニューへ</a></li>
                    <li>
                        <a href={{ route('logout') }} onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            ログアウト
                        </a>
                    <form id='logout-form' action={{ route('logout')}} method="POST" style="display: none;">
                        @csrf
                    </li>
                </ul>
            </div>
            <hr>
        </header>
        @show
        <main class="main">
        @section('title-area')    
            <!-- タイトル -->
            <div class="title-area">
                <ul class="title-text">
                    <li><h1>@yield('main-title')</h1></li>
                    {{-- 未実装　ログインしていなければログイン画面を表示するように修正する予定 --}}
                    @guest
                    <li><a href="{{ route('login') }}">ログイン</a></li>
                    @else
                    <li><span>管理者名：{{ Auth::user()->name }}</span></li>
                    @endguest
                </ul>
            </div>
            <hr>
        @show
        @yield('content')
        </main>
    </body>
</html>