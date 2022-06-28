@extends('layouts.app')

@section('content')
    <div class="main py-4">
        <div class="card card-body border-0 shadow table-wrapper table-responsive">
            <h2 class="mb-4 h5">{{ __('Tabel Pedagang') }}</h2>

            <div class="d-flex flex-row bd-highlight mb-3">
                <div class="w-10 p-2 bd-highlight">
                    @auth
                    <a href="tambahPemilik" class="mb-2 btn btn-success btn-sm">Tambah</a>
                    @endauth
                    
                </div>
                <div class="w-30 p-2 bd-highlight">
                    <form action="pemilik" method="GET">
                        <input type="search" name="search" id="kode" class="form-control" autocomplete="off" placeholder="nama pedagang"/>
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
                    <a href="exportpdfPemilik" class="mb-2 btn btn-info btn-sm">Export PDF</a>
                </div>
            </div>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="border-gray-200">{{ __('id') }}</th>
                        <th class="border-gray-200">{{ __('Nama') }}</th>
                        <th class="border-gray-200">{{ __('Alamat') }}</th>
                        <th class="border-gray-200">{{ __('NIK') }}</th>
                        <th class="border-gray-200">{{ __('No WA') }}</th>
                        <th class="border-gray-200">{{ __('No Telp') }}</th>
                        <th class="border-gray-200">{{ __('Dibuat Oleh') }}</th>
                        <th class="border-gray-200">{{ __('Diedit Oleh') }}</th>
                        <th class="border-gray-200">{{ __('Dibuat Pada') }}</th>
                        <th class="border-gray-200">{{ __('Diedit Pada') }}</th>
                        <th class="border-gray-200">{{ __('Aksi') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pemilik as $row)
                        <tr>
                            <td><span class="fw-normal">{{ $row->id }}</span></td>
                            <td><span class="fw-normal">{{ $row->nama }}</span></td>
                            <td><span class="fw-normal">{{ $row->alamat }}</span></td>
                            <td><span class="fw-normal">{{ $row->nik }}</span></td>
                            <td><span class="fw-normal">{{ $row->no_wa }}</span></td>
                            <td><span class="fw-normal">{{ $row->no_telp }}</span></td>
                            <td><span class="fw-normal">{{ $row->created_by }}</span></td>
                            <td><span class="fw-normal">{{ $row->edited_by }}</span></td>
                            <td><span class="fw-normal">{{ $row->created_at }}</span></td>
                            <td><span class="fw-normal">{{ $row->updated_at }}</span></td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="/seePemilik/{{ $row->id }}" class="btn btn-info btn-sm">Lihat</a>
                                    @auth
                                    <a href="/showPemilik/{{ $row->id }}" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="/deletePemilik/{{ $row->id }}" class="btn btn-danger btn-sm">Hapus</a>
                                    @endauth
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $pemilik->links() }}
        </div>
        
    </div>
@endsection