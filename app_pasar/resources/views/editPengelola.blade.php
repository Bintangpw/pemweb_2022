@extends('layouts.app')

@section('content')
    <div class="main py-4">
        <div class="card card-body border-0 shadow table-wrapper table-responsive">
            <h2 class="mb-4 h5">{{ __('Edit Data Pengelola') }}</h2>
            <form action="/editPengelola/{{ $pengelola->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row">
                    <label for="nomorRegistrasi" class="col-sm-2 col-form-label">Nama Pengelola</label>
                    <div class="col-sm-5">
                    <input type="text" name="nama" id="nama" class="form-control" autocomplete="off" value="{{ $pengelola->nama }}" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Alamat Pengelola</label>
                    <div class="col-sm-5">
                    <input type="text" name="alamat" id="alamat" class="form-control" autocomplete="off" value="{{ $pengelola->alamat }}" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="id" class="col-sm-2 col-form-label">Id Pasar</label>
                    <div class="col-sm-5">
                    <input type="text" name="id_pasar" id="id_pasar" class="form-control" autocomplete="off" value="{{ $pengelola->id_pasar }}" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="created" class="col-sm-2 col-form-label">Edited By</label>
                    <div class="col-sm-5">
                    <input type="text" name="edited_by" id="edited_by" class="form-control" autocomplete="off" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="foto" class="col-sm-2 col-form-label">Foto Pengelola</label>
                    <div class="col-sm-5">
                        @if ($pengelola->foto)
                            <img src="{{ asset('fotopengelola/'.$pengelola->foto) }}" alt="" style="width: 300px">
                        @else
                            <img style="width: 300px">
                        @endif
                    <input type="file" name="foto" id="foto" class="form-control" autocomplete="off" />
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
        
    </div>
@endsection