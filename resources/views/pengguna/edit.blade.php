@extends('layouts.main')

@section('content')
    <div class="card">
        <div class="card-header">
            Tambah Data Baru
        </div>
        <div class="card-body">
            <form action="{{ route('pengguna.update', $data->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ $data->nama }}" required>
                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{  $data->alamat }}" required>
                    @error('alamat')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="nomor_telepon">Nomor telepon	</label>
                    <input type="number" name="nomor_telepon" id="nomor_telepon" class="form-control @error('nomor_telepon') is-invalid @enderror" value="{{  $data->nomor_telepon }}" required>
                    @error('nomor_telepon')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="jenis_kendaraan">Jenis kendaraan</label>
                    <select name="jenis_kendaraan" id="jenis_kendaraan" class="form-control @error('jenis_kendaraan') is-invalid @enderror" required>
                        <option value="" disabled selected>Pilih Jenis kendaraan</option>
                        <option value="Motor" {{  $data->jenis_kendaraan == 'Motor' ? 'selected' : '' }}>Motor</option>
                        <option value="Mobil" {{  $data->jenis_kendaraan == 'Mobil' ? 'selected' : '' }}>Mobil</option>
                    </select>
                    @error('jenis_kendaraan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="nomor_pelat">Nomor Pelat	</label>
                    <input type="text" name="nomor_pelat" id="nomor_pelat" class="form-control @error('nomor_pelat') is-invalid @enderror" value="{{ $data->nomor_pelat }}" required>
                    @error('nomor_pelat')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="tanggal_masuk">Tanggal Masuk</label>
                    <input type="date" name="tanggal_masuk" id="tanggal_masuk" class="form-control @error('tanggal_masuk') is-invalid @enderror" value="{{ $data->tanggal_masuk }}" required>
                    @error('tanggal_masuk')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="tanggal_keluar">Tanggal keluar</label>
                    <input type="date" name="tanggal_keluar" id="tanggal_keluar" class="form-control @error('tanggal_keluar') is-invalid @enderror" value="{{ $data->tanggal_keluar }}" required>
                    @error('tanggal_keluar')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="jenis_kelamin">Status pembayaran</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="status_pembayaran" id="status_pembayaransudah" class="form-check-input @error('status_pembayaran') is-invalid @enderror" value="Lunas" {{ $data->status_pembayaran == 'Lunas' ? 'checked' : '' }} required>
                            <label for="status_pembayaransudah" class="form-check-label">Lunas</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="status_pembayaran" id="status_pembayaranbelom" class="form-check-input @error('status_pembayaran') is-invalid @enderror" value="Belom Bayar" {{ $data->status_pembayaran  == 'Belom Bayar' ? 'checked' : '' }} required>
                            <label for="status_pembayaranbelom" class="form-check-label">Belom Bayar</label>
                        </div>
                    </div>
                    @error('status_pembayaran')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('pengguna.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
@endsection
