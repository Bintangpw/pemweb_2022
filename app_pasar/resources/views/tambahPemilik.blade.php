@extends('layouts.app')

@section('content')
    <div class="main py-4">
        <div class="card card-body border-0 shadow table-wrapper table-responsive">
            <h2 class="mb-4 h5">{{ __('Tambah Data Pedagang') }}</h2>
            <form action="insertPemilik" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-5">
                    <input type="text" name="nama" id="nama" class="form-control" autocomplete="off" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-5">
                    <input type="text" name="alamat" id="alamat" class="form-control" autocomplete="off" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-5">
                    <input type="text" name="nik" id="nik" class="form-control" autocomplete="off" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="no_wa" class="col-sm-2 col-form-label">No Whatsapp</label>
                    <div class="col-sm-5">
                    <input type="text" name="no_wa" id="no_wa" class="form-control" autocomplete="off" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="no_telp" class="col-sm-2 col-form-label">No Telepon</label>
                    <div class="col-sm-5">
                    <input type="text" name="no_telp" id="no_telp" class="form-control" autocomplete="off" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="created" class="col-sm-2 col-form-label">Created By</label>
                    <div class="col-sm-5">
                    <input type="text" name="created_by" id="created_by" class="form-control" autocomplete="off" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="created" class="col-sm-2 col-form-label">Edited By</label>
                    <div class="col-sm-5">
                    <input type="text" name="edited_by" id="edited_by" class="form-control" autocomplete="off" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="foto" class="col-sm-2 col-form-label">Foto Pedagang</label>
                    <div class="col-sm-5">
                    <input type="file" name="foto" id="foto" class="form-control" autocomplete="off" />
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
        
    </div>
@endsection