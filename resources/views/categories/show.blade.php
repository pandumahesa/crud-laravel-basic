@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Kategori</h1>
        <h2>Nama Kategori: {{ $category->name }}</h2>
        <a href="{{ route('categories.index') }}" class="btn btn-primary">Kembali</a>
    </div>
@endsection
