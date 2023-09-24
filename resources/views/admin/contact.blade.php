@extends('layouts.admin')

@section('title', 'Izo | 管理メニュー')

@section('style')
    <link href="{{ secure_asset('css/admin/contact.css') }}" rel="stylesheet">
@endsection

@section('main-title', '問い合わせ管理')

@section('content')
    <!-- メイン　一覧エリア -->
    <div class="contact-list-area">
        @if (session('update-success'))
            <div class="success-message">
                {{ session('update-success') }}
            </div>
        @endif
        <table class="contact-list">
            <caption class="list-name">問い合わせ一覧</caption>
            <thead>
            <tr>
                <th class="th-id">ID</th>
                <th class="th-contact-date">受付日</th>
                <th class="th-reply-date">回答日</th>
                <th class="th-name">名前</th>
                <th class="th-genre">種別</th>
                <th class="td-message">内容</th>
            </tr>
            </thead>
            <tbody>
                @foreach($posts as $contact)
                    <tr>
                        <td class="td-id"><a href="{{ route('admin.contact.edit', ['id' => $contact->id]) }}">{{ $contact->id }}</a></td>
                        <td class="td-contact-date">{{ $contact->created_at->format('Y-m-d') }}</td>
                        <td class="td-reply-date">{{ $contact->reply_date }}</td>
                        <td class="td-name">{{ $contact->name }}</td>
                        <td class="td-genre">{{ $contact->genre }}</td>
                        <td class="td-message">{{ $contact->message }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- ページネーションリンク -->
        <div class="pagination-area">
            <!-- 最初のページへのリンク -->
            @if (!$posts->onFirstPage())
                <a href="{{ $posts->url(1) }}" rel="prev" class="pagination-text">&laquo;</a>
            @else
                <span class="pagination-text">&laquo;</span>
            @endif
            <!-- 各ページへのリンク -->
            {{ $posts->links() }}
            <!-- 最後のページへのリンク -->
            @if ($posts->hasMorePages())
                <a href="{{ $posts->url($posts->lastPage()) }}" rel="next" class="pagination-text">&raquo;</a>
            @else
                <span class="pagination-text">&raquo;</span>
            @endif
        </div>
    </div>
@endsection
