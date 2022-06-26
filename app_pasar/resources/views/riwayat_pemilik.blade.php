@extends('layouts.app')

@section('content')
    <div class="main py-4">
        <div class="card card-body border-0 shadow table-wrapper table-responsive">
            <h2 class="mb-2 h5">{{ __('Tabel Riwayat Pedagang') }}</h2>
            <div class="d-flex flex-row bd-highlight mb-3">
                <div class="w-10 p-2 bd-highlight">
                    <a href="tambahRwtPemilik" class="mb-2 btn btn-success btn-sm">Tambah</a>
                </div>
                <div class="w-20 p-2 bd-highlight">
                    <form action="riwayat_pemilik" method="GET">
                        <input type="search" name="search" id="kode" class="form-control" autocomplete="off" />
                    </form>
                </div>
                <div class="w-10 p-2 bd-highlight">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-info" role="alert">
                            {{ $message }}
                        </div>
                    @endif
                </div>
                <div class="w-10 p-2 bd-highlight">
                    <a href="exportpdfRwtPemilik" class="mb-2 btn btn-info btn-sm">Export PDF</a>
                </div>
            </div>

            <table class="table table-hover text-center">
                <thead>
                    <tr>
                        <th class="border-gray-200">{{ __('id') }}</th>
                        <th class="border-gray-200">{{ __('id tenant') }}</th>
                        <th class="border-gray-200">{{ __('Tanggal transaksi') }}</th>
                        <th class="border-gray-200">{{ __('id pemilik lama') }}</th>
                        <th class="border-gray-200">{{ __('id pemilik baru') }}</th>
                        <th class="border-gray-200">{{ __('Dibuat Oleh') }}</th>
                        <th class="border-gray-200">{{ __('Diedit Oleh') }}</th>
                        <th class="border-gray-200">{{ __('Dibuat Pada') }}</th>
                        <th class="border-gray-200">{{ __('Diedit Pada') }}</th>
                        <th class="border-gray-200">{{ __('Aksi') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($riwayat_pemilik as $riwayat_pemilik)
                        <tr>
                            <td><span class="fw-normal">{{ $riwayat_pemilik->id }}</span></td>
                            <td><span class="fw-normal">{{ $riwayat_pemilik->id_tenant }}</span></td>
                            <td><span class="fw-normal">{{ $riwayat_pemilik->tgl_transaksi }}</span></td>
                            <td><span class="fw-normal">{{ $riwayat_pemilik->id_pemilik_lama }}</span></td>
                            <td><span class="fw-normal">{{ $riwayat_pemilik->id_pemilik_baru }}</span></td>
                            <td><span class="fw-normal">{{ $riwayat_pemilik->created_by }}</span></td>
                            <td><span class="fw-normal">{{ $riwayat_pemilik->edited_by }}</span></td>
                            <td><span class="fw-normal">{{ $riwayat_pemilik->created_at }}</span></td>
                            <td><span class="fw-normal">{{ $riwayat_pemilik->updated_at }}</span></td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="/showRwtPemilik/{{ $riwayat_pemilik->id }}" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="/deleteRwtPemilik/{{ $riwayat_pemilik->id }}" class="btn btn-danger btn-sm">Hapus</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
@endsection