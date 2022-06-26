<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemilik;
use Illuminate\Support\Facades\Storage;
use PDF;

class PemilikController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')){
            $pemilik = Pemilik::where('nama', 'LIKE', '%' .$request->search. '%')->paginate(5);
        }else{
            $pemilik = Pemilik::paginate(5);
        }
        return view('pemilik', compact('pemilik'));
    }

    public function tambahPemilik()
    {
        return view('tambahPemilik');
    }

    public function insertPemilik(Request $request)
    {
        //dd($request->all());
        $pemilik = Pemilik::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotopedagang/',  $request->file('foto')->getClientOriginalName());
            $pemilik->foto =  $request->file('foto')->getClientOriginalName();
            $pemilik->save();
        }
        return redirect()->route('pemilik')->with('success', 'Data Berhasil Disimpan');
    }

    public function editPemilik(Request $request, $id)
    {
        $pemilik = Pemilik::find($id);
        $pemilik->update($request->all());
        if($request->hasFile('foto')){
            if($request->foto){
                Storage::delete($request->foto);
            }
            $request->file('foto')->move('fotopedagang/',  $request->file('foto')->getClientOriginalName());
            $pemilik->foto =  $request->file('foto')->getClientOriginalName();
            $pemilik->save();
        }
        return redirect()->route('pemilik')->with('success', 'Data Berhasil Diubah');
    }

    public function showPemilik($id)
    {
        $pemilik = Pemilik::find($id);
        return view('editPemilik', compact('pemilik'));
    }

    public function delete($id)
    {
        $pemilik = Pemilik::find($id);
        if($pemilik->foto){
            Storage::delete($pemilik->foto);
        }
        $pemilik->delete();
        return redirect()->route('pemilik')->with('success', 'Data Berhasil Dihapus');
    }

    public function seePemilik($id)
    {
        $pemilik = Pemilik::find($id);
        return view('lihatPemilik', compact('pemilik'));
    }

    public function lihatPemilik(Request $request, $id)
    {
        $pemilik = Pemilik::find($id);
    }

    public function exportpdfPemilik()
    {
        $pemilik = Pemilik::all();
        
        view()->share('pemilik', $pemilik);
        $pdfPemilik= PDF::loadview('pemilik-pdf')->setPaper('a4', 'landscape'); 
        return $pdfPemilik->download('Pedagang.pdf');
    }
}