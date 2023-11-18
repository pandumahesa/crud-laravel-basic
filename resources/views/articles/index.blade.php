@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="col-md-8">
            <h1>Daftar Artikel</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($articles as $article)
                        <tr>
                            <td>{{ $article->title }}</td>
                            <td>
                                <a href="{{ route('articles.show', $article->id) }}" class="btn btn-primary">Lihat</a>
                                <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{ route('articles.create') }}" class="btn btn-success">Buat Artikel Baru</a>
        </div>
    </div>
@endsection
