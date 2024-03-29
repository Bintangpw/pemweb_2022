@extends('layouts.app')

@section('content')
    <div class="main py-4">
        <div class="card card-body border-0 shadow table-wrapper table-responsive">
            <h2 class="mb-4 h5">{{ __('Tabel Pengelola') }}</h2>

            <div class="d-flex flex-row bd-highlight mb-3">
                <div class="w-10 p-2 bd-highlight">
                    @auth
                    <a href="tambahPengelola" class="mb-2 btn btn-success btn-sm">Tambah</a>
                    @endauth
                    
                </div>
                <div class="w-30 p-2 bd-highlight">
                    <form action="pengelola" method="GET">
                        <input type="search" name="search" id="kode" class="form-control" autocomplete="off" placeholder="nama pengelola"/>
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
                    <a href="exportpdfPengelola" class="mb-2 btn btn-info btn-sm">Export PDF</a>
                </div>
            </div>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="border-gray-200">{{ __('id') }}</th>
                        <th class="border-gray-200">{{ __('Nama') }}</th>
                        <th class="border-gray-200">{{ __('id Pasar') }}</th>
                        <th class="border-gray-200">{{ __('Dibuat Oleh') }}</th>
                        <th class="border-gray-200">{{ __('Diedit Oleh') }}</th>
                        <th class="border-gray-200">{{ __('Dibuat Pada') }}</th>
                        <th class="border-gray-200">{{ __('Diedit Pada') }}</th>
                        <th class="border-gray-200">{{ __('Aksi') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pengelola as $row)
                        <tr>
                            <td><span class="fw-normal">{{ $row->id }}</span></td>
                            <td><span class="fw-normal">{{ $row->nama }}</span></td>
                            <td><span class="fw-normal">{{ $row->id_pasar }}</span></td>
                            <td><span class="fw-normal">{{ $row->created_by }}</span></td>
                            <td><span class="fw-normal">{{ $row->edited_by }}</span></td>
                            <td><span class="fw-normal">{{ $row->created_at }}</span></td>
                            <td><span class="fw-normal">{{ $row->updated_at }}</span></td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="/seePengelola/{{ $row->id }}" class="btn btn-info btn-sm">Lihat</a>
                                    @auth
                                    <a href="/showPengelola/{{ $row->id }}" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="/deletePengelola/{{ $row->id }}" class="btn btn-danger btn-sm">Hapus</a>
                                    @endauth
                                    
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $pengelola->links() }}
        </div>
        
    </div>
@endsection