@extends('layouts.app')

@section('content')
    <div class="main py-4">
        <div class="card card-body border-0 shadow table-wrapper table-responsive">
            <h2 class="mb-4 h5">{{ __('Tabel Pasar') }}</h2>
            <div>
                <a href="tambahPasar" class="mb-2 btn btn-success btn-sm">Tambah</a>
                
                @if ($message = Session::get('success'))
                <div class="alert alert-info" role="alert">
                    {{ $message }}
                </div>
                 @endif
            </div>

            <table class="table table-hover text-center">
                <thead>
                    <tr>
                        <th class="border-gray-200">{{ __('id') }}</th>
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
                                    <button type="button" class="btn btn-info btn-sm">Lihat</button>
                                    <button type="button" class="btn btn-warning btn-sm">Edit</button>
                                    <a href="/delete/{{ $pasar->id }}" class="btn btn-danger btn-sm">Hapus</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
@endsection