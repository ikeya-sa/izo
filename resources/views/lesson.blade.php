@extends('layouts.visitor')

@section('style')
    <link href="{{ secure_asset('css/visitor/lesson.css') }}" rel="stylesheet">
@endsection

@section('main-title', 'Lesson')

@section('content')
    <!-- メイン　ギターレッスンエリア -->
    <article class="guitarlesson">
        <div class="guitarlesson-inner">
            <div class="guitarlesson-title-text">
                <h2>ギターレッスン</h2>
            </div>
            <hr>
            <div class="guitarlesson-body">
            <p>
            ギター講師をしています。<br>
            受講可能地域：山手線沿線・中央線・井の頭線・西武新宿線（オンラインレッスン可）<br>
            &#9654;<a href="http://seijo-ms.com/guitar/teacher.html" target="_blank">セイジョーミュージックスクール</a><br>
            </p>
            </div>
        </div>
    </article>
@endsection
