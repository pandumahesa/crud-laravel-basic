@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Kategori</h1>
        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nama Kategori:</label>
                <input type="text" name="name" class="form-control" value="{{ $category->name }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Perbarui Kategori</button>
        </form>
    </div>
@endsection
