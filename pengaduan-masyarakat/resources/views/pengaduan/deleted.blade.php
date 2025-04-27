@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Pengaduan Dihapus</h1>

        <a href="{{ route('pengaduan.index') }}" class="btn btn-primary mb-3">Kembali ke Daftar Pengaduan</a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">{{ $message }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Pelapor</th>
                    <th>Judul</th>
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
                        <td>{{ $pengaduan->kategori }}</td>
                        <td>{{ $pengaduan->status }}</td>
                        <td>{{ $pengaduan->tanggal_pengaduan }}</td>
                        <td>
                            <a href="{{ route('pengaduan.restore', $pengaduan->id) }}"
                                class="btn btn-success btn-sm">Pulihkan</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-center">
            {{ $pengaduans->links() }}
        </div>
    </div>
@endsection