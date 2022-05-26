@extends('layouts.app')

@section('content')
    <div class="main py-4">
        <div class="card card-body border-0 shadow table-wrapper table-responsive">
            <h2 class="mb-4 h5">{{ __('Tabel Pedagang') }}</h2>

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
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pemilik as $pemilik)
                        <tr>
                            <td><span class="fw-normal">{{ $pemilik->id }}</span></td>
                            <td><span class="fw-normal">{{ $pemilik->nama }}</span></td>
                            <td><span class="fw-normal">{{ $pemilik->alamat }}</span></td>
                            <td><span class="fw-normal">{{ $pemilik->nik }}</span></td>
                            <td><span class="fw-normal">{{ $pemilik->no_wa }}</span></td>
                            <td><span class="fw-normal">{{ $pemilik->no_telp }}</span></td>
                            <td><span class="fw-normal">{{ $pemilik->created_by }}</span></td>
                            <td><span class="fw-normal">{{ $pemilik->edited_by }}</span></td>
                            <td><span class="fw-normal">{{ $pemilik->created_at }}</span></td>
                            <td><span class="fw-normal">{{ $pemilik->updated_at }}</span></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
@endsection