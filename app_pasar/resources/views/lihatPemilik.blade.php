@extends('layouts.app')

@section('content')
    <div class="main py-4">
        <div class="card card-body border-0 shadow table-wrapper table-responsive">
            <h2 class="mb-4 h5">{{ __('Profile') }}</h2>
            <div>
                <a href="/pemilik" class="btn btn-danger btn-sm">Back</a>
            </div>
            
            <div class="d-flex flex-row bd-highlight mb-3">
                <div class="w-50 p-2 bd-highlight">
                    <ol class="list-group list-group-numbered">
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                          <div class="ms-2 me-auto">
                            <div class="fw-bold">Nama Pedagang</div>
                            {{ $pemilik->nama }}
                          </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                          <div class="ms-2 me-auto">
                            <div class="fw-bold">Alamat</div>
                            {{ $pemilik->alamat }}
                          </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                          <div class="ms-2 me-auto">
                            <div class="fw-bold">Nomor WA</div>
                            {{ $pemilik->no_wa }}
                          </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                              <div class="fw-bold">No Telp</div>
                              {{ $pemilik->no_telp }}
                            </div>
                          </li>
                      </ol>
                </div>
                <div class="p-2 bd-highlight">
                    <img src="{{ asset('fotopedagang/'.$pemilik->foto) }}" alt="" style="width: 300px">
                </div>
              </div>
        </div>
    </div>
@endsection