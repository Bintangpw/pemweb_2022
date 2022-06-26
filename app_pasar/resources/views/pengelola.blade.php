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
                    @foreach ($pengelola as $pengelola)
                        <tr>
                            <td><span class="fw-normal">{{ $pengelola->id }}</span></td>
                            <td><span class="fw-normal">{{ $pengelola->nama }}</span></td>
                            <td><span class="fw-normal">{{ $pengelola->id_pasar }}</span></td>
                            <td><span class="fw-normal">{{ $pengelola->created_by }}</span></td>
                            <td><span class="fw-normal">{{ $pengelola->edited_by }}</span></td>
                            <td><span class="fw-normal">{{ $pengelola->created_at }}</span></td>
                            <td><span class="fw-normal">{{ $pengelola->updated_at }}</span></td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="/seePengelola/{{ $pengelola->id }}" class="btn btn-info btn-sm">Lihat</a>
                                    @auth
                                    <a href="/showPengelola/{{ $pengelola->id }}" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="/deletePengelola/{{ $pengelola->id }}" class="btn btn-danger btn-sm">Hapus</a>
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