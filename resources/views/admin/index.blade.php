@extends('layouts.admin')

@section('title', 'Izo | 管理メニュー')

@section('style')
    <link href="{{ secure_asset('css/admin/index.css') }}" rel="stylesheet">
@endsection

@section('main-title', '管理メニュー')

@section('content')
    <!-- メニュー -->
    <ul class="menu-area">
        <li><a href="{{ route('admin.news') }}">News管理</a></li>
        <li><a href="{{ route('admin.contact') }}">問い合わせ管理</a></li>
        <li><a href="{{ route('admin.admin') }}">Admin管理</a></li>
    </ul>
@endsection