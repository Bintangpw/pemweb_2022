@extends('layouts.app')

@section('content')
    <div class="main py-4">
        <div class="card card-body border-0 shadow table-wrapper table-responsive">
            <h2 class="mb-4 h5">{{ __('Edit Data Pasar') }}</h2>
            <form action="/editPasar/{{ $pasar->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row">
                    <label for="namaPasar" class="col-sm-2 col-form-label">Nama Pasar</label>
                    <div class="col-sm-5">
                    <input type="text" name="nama" id="nama" class="form-control" autocomplete="off" value="{{ $pasar->nama }}" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat Pasar</label>
                    <div class="col-sm-5">
                    <input type="text" name="alamat" id="alamat" class="form-control" autocomplete="off" value="{{ $pasar->alamat }}" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="kodePasar" class="col-sm-2 col-form-label">Kode Pasar</label>
                    <div class="col-sm-5">
                    <input type="text" name="kode_pasar" id="kode" class="form-control" autocomplete="off" value="{{ $pasar->kode_pasar }}" />
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection