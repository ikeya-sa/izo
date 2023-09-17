@extends('layouts.visitor')

@section('style')
    <link href="{{ secure_asset('css/visitor/discography.css') }}" rel="stylesheet">
@endsection

@section('main-title', 'Discography')

@section('content')
    <!-- メイン　CDエリア -->
    <article class="work">
        <div class="work-inner">
            <div class="work-title-text">
                <h2>CD</h2>
            </div>
            <hr>
            <ul class="work-list">
                <li>
                    <div class="work-content">
                        <!-- 左右ブロックに分割 -->
                        <div class="work-left">
                            <a href="https://linkco.re/zyP9UxRV?lang=ja" target="_blank"><img src="images/discography/journeyman.jpg" class="work-content-img" alt="CDの画像"></a>
                        </div>
                        <div class="work-right">
                            <h3 class="work-content-title">Journeyman</h3>
                            <p class="work-content-date">2020年02月12日 release</p>
                            <p class="work-content-body">
                            自身も「挑戦であり念願でもあった」と語るオール・インストゥルメンタル・ミュージックながら、キャッチーでPOPなメロディを中心とし、
                            ギタリストのインスト作品にありがちな「テクニック重視」の作品とは一線を画す仕上がりとなっています。<br>
                            メンバーには覆面インスト・トリオ「Mask a Laid(マスク・ア・レイド/Izoとは別名義)」時代からの盟友であるベーシスト「フジハラヒロキ」を、
                            そしてゲスト・キーボーディストに「Pazzy(元Ancient Myth/現Earley Cross)」が参加し、作品に更なる彩りを加えております。<br>
                            自身の得意とするHR/HMのみならず、BluesやFusion、はたまたEDMまで飛び出す本作。<br>
                            普段インスト作品を聞かないリスナーにもお勧め出来る作品となっております!!
                            </p>
                            <a href="https://www.amazon.co.jp/Journeyman%EF%BC%88%E3%82%B8%E3%83%A3%E3%83%BC%E3%83%8B%E3%83%BC%E3%83%9E%E3%83%B3%EF%BC%89-Izo/dp/B081FD6JDZ/ref=sr_1_1?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&crid=1HQM4K1OI0X3D&keywords=journeyman+izo&qid=1693129537&sprefix=journeyman+izo%2Caps%2C172&sr=8-1" class="work-distributor-link" target="_blank"><img src="images/discography/amazon.png"></a>
                            <a href="https://linkco.re/zyP9UxRV?lang=ja" class="work-distributor-link" target="_blank"><img src="images/discography/tunecore.jpg"></a>
                        </div>
                    </div>
                    <hr>
                </li>
            </ul>
        </div>
    </article>
    <!-- メイン　配信エリア -->
    <article class="work">
        <div class="work-inner">
            <div class="work-title-text">
                <h2>配信</h2>
            </div>
            <hr>
            <ul class="work-list">
                <li>
                    <div class="work-content">
                        <!-- 左中右ブロックに分割 -->
                        <div class="work-left">
                            <a href="https://linkco.re/mnrsHMMu?lang=ja" target="_blank"><img src="images/discography/justkidding.jpg" class="work-content-img" alt="配信の画像"></a>
                        </div>
                        <div class="work-right">
                            <h3 class="work-content-title">Just Kidding</h3>
                            <p class="work-content-date">2021年09月15日 release</p>
                            <p class="work-content-body">
                            数々のバンドを経て、音楽活動を続けるギタリスト「Izo（イゾー）」。<br>
                            2020年2月にリリースされ、好評を博した1stソロ・アルバムに続き早くも2ndフル・アルバムが登場！<br>
                            様々なジャンルに展開していた前作とは違い、よりストレートなRockに徹した事によって、更に解り易いアルバムへ昇華。<br>
                            そして今作でも圧倒的な存在感を誇るゲスト・キーボーディストの「Pazzy(Key./EARLY CROSS,ex-ANCIENT MYTH)」や、数々のゲスト・ベーシストの参加により、聴き所も多数！
                            ギター・インスト・ファンのみならず全てのメロディアスな音楽ファンへおすすめ出来る内容となっています！
                            </p>
                            <a href="https://linkco.re/mnrsHMMu?lang=ja" class="work-distributor-link" target="_blank"><img src="images/discography/tunecore.jpg"></a>
                        </div>
                    </div>
                    <hr>
                </li>
            </ul>
        </div>
    </article>
@endsection
