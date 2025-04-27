@extends('layouts.app') <!-- Sesuaikan dengan layout kamu -->

@section('content')
<div class="container">
    <h1>Riwayat Pengaduan Dihapus</h1>

    <a href="{{ route('pengaduan.index') }}" class="btn btn-primary mb-3">Kembali</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Pelapor</th>
                <th>Judul Pengaduan</th>
                <th>Kategori</th>
                <th>Status</th>
                <th>Tanggal</th>
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
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-end">
        {{ $pengaduans->links() }}
    </div>
</div>
@endsection
