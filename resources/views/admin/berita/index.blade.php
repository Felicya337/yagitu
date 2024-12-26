@extends('layouts.admin')

@section('content')
    <h1>Daftar Berita</h1>

    <a href="{{ route('admin.berita.create') }}" class="btn btn-primary mb-3">Tambah Berita</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($beritas as $berita)
                <tr>
                    <td>{{ $berita->judul }}</td>
                    <td>
                        @if ($berita->gambar)
                            <img src="{{ asset('storage/images/' . $berita->gambar) }}" alt="{{ $berita->judul }}"
                                width="100">
                        @else
                            -
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.berita.show', $berita->id) }}" class="btn btn-info btn-sm">Lihat</a>
                        <a href="{{ route('admin.berita.edit', $berita->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.berita.destroy', $berita->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
