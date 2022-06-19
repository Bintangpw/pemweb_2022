@extends('layouts.app')

@section('content')
    <div class="main py-4">
        <div class="card card-body border-0 shadow table-wrapper table-responsive">
            <h2 class="mb-4 h5">{{ __('Tambah Data Pemilik') }}</h2>
            <form action="insertRwtPemilik" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Id Tenant</label>
                    <div class="col-sm-5">
                    <input type="text" name="id_tenant" id="id_tenant" class="form-control" autocomplete="off" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Tanggal Transaksi</label>
                    <div class="col-sm-5">
                    <input type="date" name="tgl_transaksi" id="tgl_transaksi" class="form-control" autocomplete="off" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Id Pedagang Lama</label>
                    <div class="col-sm-5">
                    <input type="text" name="id_pemilik_lama" id="id_pemilik_lama" class="form-control" autocomplete="off" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Id Pedagang Baru</label>
                    <div class="col-sm-5">
                    <input type="text" name="id_pemilik_baru" id="id_pemilik_baru" class="form-control" autocomplete="off" />
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
        
    </div>
@endsection