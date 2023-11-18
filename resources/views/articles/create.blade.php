@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Buat Artikel Baru</h1>
        <form action="{{ route('articles.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Judul:</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="content">Isi Artikel:</label>
                <textarea name="content" class="form-control" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Simpan Artikel</button>
        </form>
    </div>
@endsection
