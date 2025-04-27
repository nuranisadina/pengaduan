@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Pengaduan Dihapus</h1>

        <a href="{{ route('pengaduan.index') }}" class="btn btn-primary mb-3">Kembali ke Daftar Pengaduan</a>

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
                    <th>Aksi</th> {{-- Tambah kolom aksi --}}
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
                            <a href="{{ route('pengaduan.restore', $pengaduan->id) }}" class="btn btn-success btn-sm"
                                onclick="return confirm('Yakin ingin memulihkan pengaduan ini?')">
                                Pulihkan
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Pagination kanan bawah --}}
        <div class="d-flex justify-content-end mt-3">
            {{ $pengaduans->links() }}
        </div>
    </div>
@endsection
