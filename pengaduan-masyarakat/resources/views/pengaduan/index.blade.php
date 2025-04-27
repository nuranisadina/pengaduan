@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Pengaduan</h1>

        <a href="{{ route('pengaduan.create') }}" class="btn btn-primary mb-3">Tambah Pengaduan</a>
        <a href="{{ route('pengaduan.terhapus') }}" class="btn btn-danger mb-3">Pengaduan Dihapus</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Pelapor</th>
                    <th>Judul</th>
                    <th>Isi Pengaduan</th>
                    <th>Kategori</th>
                    <th>Status</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengaduans as $pengaduan)
                    <tr>
                        <td>{{ $pengaduan->nama_pelapor }}</td>
                        <td>{{ $pengaduan->judul_pengaduan }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($pengaduan->isi_pengaduan, 50, '...') }}</td>
                        <td>{{ $pengaduan->kategori }}</td>
                        <td>{{ $pengaduan->status }}</td>
                        <td>{{ $pengaduan->tanggal_pengaduan }}</td>
                        <td>
                            <a href="{{ route('pengaduan.edit', $pengaduan->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('pengaduan.destroy', $pengaduan->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-end mt-3">
            {{ $pengaduans->links() }}
        </div>

    </div>
@endsection