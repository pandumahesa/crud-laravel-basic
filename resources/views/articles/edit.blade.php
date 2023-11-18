@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Artikel</h1>
        <form action="{{ route('articles.update', $article->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Judul:</label>
                <input type="text" name="title" class="form-control" value="{{ $article->title }}" required>
            </div>
            <div class="form-group">
                <label for="content">Isi Artikel:</label>
                <textarea name="content" class="form-control" rows="5" required>{{ $article->content }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Perbarui Artikel</button>
        </form>
    </div>
@endsection
