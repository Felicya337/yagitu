<!-- resources/views/admin/berita/admin-berita-create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Berita</h1>

        <form action="{{ route('admin.berita.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="title">Judul Berita</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <div class="form-group">
                <label for="content">Isi Berita</label>
                <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
            </div>

            <div class="form-group">
                <label for="image">Gambar (URL)</label>
                <input type="url" class="form-control" id="image" name="image">
            </div>

            <button type="submit" class="btn btn-primary">Simpan Berita</button>
        </form>
    </div>
@endsection
