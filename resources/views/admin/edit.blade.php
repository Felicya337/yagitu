@extends('layouts.admin')

@section('content')
    <h1>Edit Berita</h1>

    <form action="{{ route('admin.berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{ $berita->judul }}" required>
        </div>

        <div class="form-group">
            <label for="konten">Konten</label>
            <textarea class="form-control" id="konten" name="konten" rows="5" required>{{ $berita->konten }}</textarea>
        </div>

        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" class="form-control-file" id="gambar" name="gambar">
            @if ($berita->gambar)
                <img src="{{ asset('storage/images/' . $berita->gambar) }}" alt="{{ $berita->judul }}" width="100"
                    class="mt-2">
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
