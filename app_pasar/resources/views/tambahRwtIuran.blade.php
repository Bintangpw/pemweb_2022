@extends('layouts.app')

@section('content')
    <div class="main py-4">
        <div class="card card-body border-0 shadow table-wrapper table-responsive">
            <h2 class="mb-4 h5">{{ __('Tambah Data Pemilik') }}</h2>
            <form action="insertRwtIuran" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Id Tenant</label>
                    <div class="col-sm-5">
                    <input type="text" name="id_tenant" id="id_tenant" class="form-control" autocomplete="off" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Periode Iuran</label>
                    <div class="col-sm-5">
                    <input type="text" name="tahun_bulan" id="tahun_bulan" class="date form-control"/>
                        <script type="text/javascript">
                        $(".date").datepicker({
                            format: "mm-yyyy",
                          startView: "months", 
                        minViewMode: "months"
                        });
                        </script>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Jumlah Pembayaran</label>
                    <div class="col-sm-5">
                    <input type="text" name="jml_bayar" id="jml_bayar" class="form-control" autocomplete="off" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Tanggal Bayar</label>
                    <div class="col-sm-5">
                    <input type="date" name="tgl_bayar" id="tgl_bayar" class="form-control" autocomplete="off" />
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
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
        
    </div>
@endsection