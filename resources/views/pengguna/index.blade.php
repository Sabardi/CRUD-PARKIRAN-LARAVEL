@extends('layouts.main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h1>DAFTAR KENDARAN HARI INI</h1>

        </div>
        <div class="card-body">
            {{-- <a href="{{ route('pengguna.create') }}" class="btn btn-primary mb-3">Tambah Data</a> --}}
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>id parkir</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Nomor telepon</th>
                        <th>Jenis kendaraan</th>
                        <th>Nomor pelat</th>
                        <th>Tanggal masuk</th>
                        <th>Tanggal keluar</th>
                        <th>Status pembayaran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $k)
                        <tr>
                            <td>{{ $k->id }}</td>
                            <td><a href="{{ route('pengguna.detail',$k->id) }}">{{ $k->nama }}</a></td>
                            <td>{{ $k->alamat }}</td>
                            <td>{{ $k->nomor_telepon }}</td>
                            <td>{{ $k->jenis_kendaraan }}</td>
                            <td>{{ $k->nomor_pelat }}</td>
                            <td>{{ $k->tanggal_masuk }}</td>
                            <td>{{ $k->tanggal_keluar }}</td>
                            <td>{{ $k->status_pembayaran }}</td>
                            <td>
                                <a href="{{ route('pengguna.edit', $k->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('pengguna.destroy', $k->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{-- <a href="{{url('/logout')}}">Log out</a> --}}
        </div>
    </div>
@endsection
