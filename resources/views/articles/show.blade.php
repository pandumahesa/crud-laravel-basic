@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Artikel</h1>
        <h2>Judul: {{ $article->title }}</h2>
        <p>Isi Artikel: {{ $article->content }}</p>
        <a href="{{ route('articles.index') }}" class="btn btn-primary">Kembali</a>
    </div>
@endsection
