@extends('layouts.app')

@section('content')
    <div class="main py-4">
        <div class="card card-body border-0 shadow table-wrapper table-responsive">
            <h2 class="mb-4 h5">{{ __('Tambah Data Kios') }}</h2>
            <form action="insertTenant" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row">
                    <label for="namaTenant" class="col-sm-2 col-form-label">Nama Kios</label>
                    <div class="col-sm-5">
                    <input type="text" name="nama" id="nama" class="form-control" autocomplete="off" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="id" class="col-sm-2 col-form-label">Id Pemilik</label>
                    <div class="col-sm-5">
                    <input type="text" name="id_pemilik" id="id_pemilik" class="form-control" autocomplete="off" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="latitude" class="col-sm-2 col-form-label">Latitude Tenant</label>
                    <div class="col-sm-5">
                    <input type="text" name="latitude_tenant" id="latitude_tenant" class="form-control" autocomplete="off" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="longitude" class="col-sm-2 col-form-label">Longitude Tenant</label>
                    <div class="col-sm-5">
                    <input type="text" name="longitude_tenant" id="longitude_tenant" class="form-control" autocomplete="off" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="iuran" class="col-sm-2 col-form-label">Harga Iuran</label>
                    <div class="col-sm-5">
                    <input type="text" name="harga_iuran" id="harga_iuran" class="form-control" autocomplete="off" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="id" class="col-sm-2 col-form-label">Id Pasar</label>
                    <div class="col-sm-5">
                    <input type="text" name="id_pasar" id="id_pasar" class="form-control" autocomplete="off" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="foto" class="col-sm-2 col-form-label">Foto Tenant</label>
                    <div class="col-sm-5">
                    <input type="file" name="foto" id="foto" class="form-control" autocomplete="off" />
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
        
    </div>
@endsection