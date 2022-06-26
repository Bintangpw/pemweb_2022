@extends('layouts.app')

@section('content')
    <div class="main py-4">
        <div class="card card-body border-0 shadow table-wrapper table-responsive">
            <h2 class="mb-2 h5">{{ __('Tabel Pasar') }}</h2>
            <div class="d-flex flex-row bd-highlight mb-3">
                <div class="w-10 p-2 bd-highlight">
                    @auth
                    <a href="tambahPasar" class="mb-2 btn btn-success btn-sm">Tambah</a>
                    @endauth
                    
                </div>
                <div class="w-20 p-2 bd-highlight">
                    <form action="pasar" method="GET">
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
                    <a href="exportpdfPasar" class="mb-2 btn btn-info btn-sm">Export PDF</a>
                </div>
            </div>

            <table class="table table-hover text-center">
                <thead>
                    <tr>
                        <th class="border-gray-200">{{ __('id pasar') }}</th>
                        <th class="border-gray-200">{{ __('Nama Pasar') }}</th>
                        <th class="border-gray-200">{{ __('Alamat Pasar') }}</th>
                        <th class="border-gray-200">{{ __('Kode Pasar') }}</th>
                        <th class="border-gray-200">{{ __('Dibuat Oleh') }}</th>
                        <th class="border-gray-200">{{ __('Diedit Oleh') }}</th>
                        <th class="border-gray-200">{{ __('Dibuat Pada') }}</th>
                        <th class="border-gray-200">{{ __('Diedit Pada') }}</th>
                        <th class="border-gray-200">{{ __('Aksi') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pasar as $pasar)
                        <tr>
                            <td><span class="fw-normal">{{ $pasar->id }}</span></td>
                            <td><span class="fw-normal">{{ $pasar->nama }}</span></td>
                            <td><span class="fw-normal">{{ $pasar->alamat }}</span></td>
                            <td><span class="fw-normal">{{ $pasar->kode_pasar }}</span></td>
                            <td><span class="fw-normal">{{ $pasar->created_by }}</span></td>
                            <td><span class="fw-normal">{{ $pasar->edited_by }}</span></td>
                            <td><span class="fw-normal">{{ $pasar->created_at }}</span></td>
                            <td><span class="fw-normal">{{ $pasar->updated_at }}</span></td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="/seePasar/{{ $pasar->id }}" class="btn btn-info btn-sm">Lihat</a>
                                    @auth
                                    <a href="/showPasar/{{ $pasar->id }}" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="/deletePasar/{{ $pasar->id }}" class="btn btn-danger btn-sm">Hapus</a>
                                    @endauth
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection