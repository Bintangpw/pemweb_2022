@extends('layouts.app')

@section('content')
    <div class="main py-4">
        <div class="card card-body border-0 shadow table-wrapper table-responsive">
            <h2 class="mb-2 h5">{{ __('Tabel Riwayat Iuran') }}</h2>
            <div class="d-flex flex-row bd-highlight mb-3">
                <div class="w-10 p-2 bd-highlight">
                    <a href="tambahRwtIuran" class="mb-2 btn btn-success btn-sm">Tambah</a>
                </div>
                <div class="w-20 p-2 bd-highlight">
                    <form action="riwayat_iuran" method="GET">
                        <input type="search" name="search" id="kode" class="form-control" autocomplete="off" placeholder="id tenant"/>
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
                    <a href="exportpdfRwtIuran" class="mb-2 btn btn-info btn-sm">Export PDF</a>
                </div>
            </div>

            <table class="table table-hover text-center">
                <thead>
                    <tr>
                        <th class="border-gray-200">{{ __('id') }}</th>
                        <th class="border-gray-200">{{ __('id tenant') }}</th>
                        <th class="border-gray-200">{{ __('Periode') }}</th>
                        <th class="border-gray-200">{{ __('jumlah bayar') }}</th>
                        <th class="border-gray-200">{{ __('tanggal bayar') }}</th>
                        <th class="border-gray-200">{{ __('Dibuat Oleh') }}</th>
                        <th class="border-gray-200">{{ __('Diedit Oleh') }}</th>
                        <th class="border-gray-200">{{ __('Dibuat Pada') }}</th>
                        <th class="border-gray-200">{{ __('Diedit Pada') }}</th>
                        <th class="border-gray-200">{{ __('Aksi') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($riwayat_iuran as $row)
                        <tr>
                            <td><span class="fw-normal">{{ $row->id }}</span></td>
                            <td><span class="fw-normal">{{ $row->id_tenant }}</span></td>
                            <td><span class="fw-normal">{{ $row->tahun_bulan }}</span></td>
                            <td><span class="fw-normal">{{ $row->jml_bayar }}</span></td>
                            <td><span class="fw-normal">{{ $row->tgl_bayar }}</span></td>
                            <td><span class="fw-normal">{{ $row->created_by }}</span></td>
                            <td><span class="fw-normal">{{ $row->edited_by }}</span></td>
                            <td><span class="fw-normal">{{ $row->created_at }}</span></td>
                            <td><span class="fw-normal">{{ $row->updated_at }}</span></td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="/showRwtIuran/{{ $row->id }}" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="/deleteRwtIuran/{{ $row->id }}" class="btn btn-danger btn-sm">Hapus</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $riwayat_iuran->links() }}
        </div>
        
    </div>
@endsection