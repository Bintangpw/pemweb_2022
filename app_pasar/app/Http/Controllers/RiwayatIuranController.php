<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RiwayatIuran;
use Illuminate\Support\Facades\Storage;
use PDF;

class RiwayatIuranController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')){
            $riwayat_iuran = RiwayatIuran::where('id_tenant', 'LIKE', '%' .$request->search. '%')->paginate(5);
        }else{
            $riwayat_iuran = RiwayatIuran::paginate(5);
        }
        return view('riwayat_iuran', compact('riwayat_iuran'));
    }

    public function tambahRwtIuran()
    {
        return view('tambahRwtIuran');
    }

    public function insertRwtIuran(Request $request)
    {
        //dd($request->all());
        RiwayatIuran::create($request->all());
        return redirect()->route('riwayat_iuran')->with('success', 'Data Berhasil Disimpan');
    }

    public function editRwtIuran(Request $request, $id)
    {
        $riwayat_iuran = RiwayatIuran::find($id);
        $riwayat_iuran->update($request->all());
        return redirect()->route('riwayat_iuran')->with('success', 'Data Berhasil Diubah');
    }

    public function showRwtIuran($id)
    {
        $riwayat_iuran = RiwayatIuran::find($id);
        return view('editRwtIuran', compact('riwayat_iuran'));
    }

    public function delete($id)
    {
        $riwayat_iuran = RiwayatIuran::find($id);
        $riwayat_iuran->delete();
        return redirect()->route('riwayat_iuran')->with('success', 'Data Berhasil Dihapus');
    }
    public function exportpdfRwtIuran()
    {
        $riwayat_iuran = RiwayatIuran::all();
        
        view()->share('riwayat_iuran', $riwayat_iuran);
        $pdfRiwayatIuran = PDF::loadview('riwayat_iuran-pdf')->setPaper('a4', 'landscape'); 
        return $pdfRiwayatIuran->download('Riwayat Iuran.pdf');
    }
}