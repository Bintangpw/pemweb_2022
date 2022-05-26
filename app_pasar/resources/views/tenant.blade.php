@extends('layouts.app')

@section('content')
    <div class="main py-4">
        <div class="card card-body border-0 shadow table-wrapper table-responsive">
            <h2 class="mb-4 h5">{{ __('Tabel Kios') }}</h2>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="border-gray-200">{{ __('id') }}</th>
                        <th class="border-gray-200">{{ __('Nama Tenant') }}</th>
                        <th class="border-gray-200">{{ __('id Pemilik') }}</th>
                        <th class="border-gray-200">{{ __('latitude tenant') }}</th>
                        <th class="border-gray-200">{{ __('longitude tenant') }}</th>
                        <th class="border-gray-200">{{ __('harga iuran') }}</th>
                        <th class="border-gray-200">{{ __('id Pasar') }}</th>
                        <th class="border-gray-200">{{ __('Dibuat Oleh') }}</th>
                        <th class="border-gray-200">{{ __('Diedit Oleh') }}</th>
                        <th class="border-gray-200">{{ __('Dibuat Pada') }}</th>
                        <th class="border-gray-200">{{ __('Diedit Pada') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tenant as $tenant)
                        <tr>
                            <td><span class="fw-normal">{{ $tenant->id }}</span></td>
                            <td><span class="fw-normal">{{ $tenant->nama }}</span></td>
                            <td><span class="fw-normal">{{ $tenant->id_pemilik }}</span></td>
                            <td><span class="fw-normal">{{ $tenant->latitude_tenant }}</span></td>
                            <td><span class="fw-normal">{{ $tenant->longitude_tenant }}</span></td>
                            <td><span class="fw-normal">{{ $tenant->harga_iuran }}</span></td>
                            <td><span class="fw-normal">{{ $tenant->id_pasar }}</span></td>
                            <td><span class="fw-normal">{{ $tenant->created_by }}</span></td>
                            <td><span class="fw-normal">{{ $tenant->edited_by }}</span></td>
                            <td><span class="fw-normal">{{ $tenant->created_at }}</span></td>
                            <td><span class="fw-normal">{{ $tenant->updated_at }}</span></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
@endsection