<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RiwayatPemilik;
use Illuminate\Support\Facades\Storage;
use PDF;

class RiwayatPemilikController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')){
            $riwayat_pemilik = RiwayatPemilik::where('id_tenant', 'LIKE', '%' .$request->search. '%')->paginate(5);
        }else{
            $riwayat_pemilik = RiwayatPemilik::paginate(5);
        }
        return view('riwayat_pemilik', compact('riwayat_pemilik'));
    }

    public function tambahRwtPemilik()
    {
        return view('tambahRwtPemilik');
    }

    public function insertRwtPemilik(Request $request)
    {
        //dd($request->all());
        RiwayatPemilik::create($request->all());
        return redirect()->route('riwayat_pemilik')->with('success', 'Data Berhasil Disimpan');
    }

    public function editRwtPemilik(Request $request, $id)
    {
        $riwayat_pemilik = RiwayatPemilik::find($id);
        $riwayat_pemilik->update($request->all());
        return redirect()->route('riwayat_pemilik')->with('success', 'Data Berhasil Diubah');
    }

    public function showRwtPemilik($id)
    {
        $riwayat_pemilik = RiwayatPemilik::find($id);
        return view('editRwtPemilik', compact('riwayat_pemilik'));
    }

    public function delete($id)
    {
        $riwayat_pemilik = RiwayatPemilik::find($id);
        $riwayat_pemilik->delete();
        return redirect()->route('riwayat_pemilik')->with('success', 'Data Berhasil Dihapus');
    }

    public function  exportpdfRwtPemilik()
    {
        $riwayat_pemilik = RiwayatPemilik::all();
        
        view()->share('riwayat_pemilik', $riwayat_pemilik);
        $pdfRiwayatPemilik = PDF::loadview('riwayat_pemilik-pdf')->setPaper('a4', 'landscape'); 
        return $pdfRiwayatPemilik->download('Riwayat Pedagang.pdf');
    }
}