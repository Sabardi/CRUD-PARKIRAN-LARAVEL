@extends('layouts.detail')


@section('content')
    <div class="card">
        <div class="card-header">
            Detail pengguna
        </div>
        <div class="card-body">
            <form >
                <div class="form-group">
                    <label for="nama">kode parkir : {{$data->id}}</label>
                </div>

                <div class="form-group">
                    <label for="nama">Nama : {{$data->nama}}</label>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat : {{$data->alamat}}</label>
                </div>

                <div class="form-group">
                    <label for="nomor_telepon">Nomor telepon : {{$data->nomor_telepon}}</label>
                </div>

                <div class="form-group">
                    <label for="jenis_kendaraan">Jenis kendaraan : {{$data->jenis_kendaraan}}</label>

                </div>

                <div class="form-group">
                    <label for="nomor_pelat">Nomor Pelat : {{$data->nomor_pelat}}</label>
                </div>

                <div class="form-group">
                    <label for="tanggal_masuk">Tanggal Masuk : {{$data->tanggal_masuk}}</label>
                </div>

                <div class="form-group">
                    <label for="tanggal_keluar">Tanggal keluar : {{$data->tanggal_keluar}}</label>
                </div>

                <div class="form-group">
                    <label for="status pembayaran">Status pembayaran : {{$data->status_pembayaran }}</label>
                </div>

            </div>
        </form>
        <div class="form-group">
            <a href="{{ route('pengguna.index') }}" class="btn btn-secondary">kembali</a>
    </div>
@endsection
