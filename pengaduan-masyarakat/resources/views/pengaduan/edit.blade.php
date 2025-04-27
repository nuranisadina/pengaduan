@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Pengaduan</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Ups!</strong> Ada kesalahan input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('pengaduan.update', $pengaduan->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group mb-3">
                <label>Nama Pelapor</label>
                <input type="text" name="nama_pelapor" value="{{ $pengaduan->nama_pelapor }}" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label>Judul Pengaduan</label>
                <input type="text" name="judul_pengaduan" value="{{ $pengaduan->judul_pengaduan }}" class="form-control"
                    required>
            </div>

            <div class="form-group mb-3">
                <label>Isi Pengaduan</label>
                <textarea name="isi_pengaduan" class="form-control" rows="5"
                    required>{{ $pengaduan->isi_pengaduan }}</textarea>
            </div>

            <div class="form-group mb-3">
                <label>Kategori</label>
                <input type="text" name="kategori" value="{{ $pengaduan->kategori }}" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="terbuka" {{ $pengaduan->status == 'terbuka' ? 'selected' : '' }}>Terbuka</option>
                    <option value="diproses" {{ $pengaduan->status == 'diproses' ? 'selected' : '' }}>Diproses</option>
                    <option value="selesai" {{ $pengaduan->status == 'selesai' ? 'selected' : '' }}>Selesai</option>
                </select>
            </div>

            <div class="form-group mb-3">
                <label>Tanggal Pengaduan</label>
                <input type="date" name="tanggal_pengaduan" value="{{ $pengaduan->tanggal_pengaduan }}" class="form-control"
                    required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('pengaduan.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection