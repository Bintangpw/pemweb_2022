<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengelola;
use Illuminate\Support\Facades\Storage;
use PDF;

class PengelolaController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')){
            $pengelola = Pengelola::where('nama', 'LIKE', '%' .$request->search. '%')->paginate(5);
        }else{
            $pengelola = Pengelola::paginate(5);
        }
        return view('pengelola', compact('pengelola'));
    }

    public function tambahPengelola()
    {
        return view('tambahPengelola');
    }

    public function insertPengelola(Request $request)
    {
        //dd($request->all());
        $pengelola = Pengelola::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotopengelola/',  $request->file('foto')->getClientOriginalName());
            $pengelola->foto =  $request->file('foto')->getClientOriginalName();
            $pengelola->save();
        }
        return redirect()->route('pengelola')->with('success', 'Data Berhasil Disimpan');
    }

    public function editPengelola(Request $request, $id)
    {
        $pengelola = Pengelola::find($id);
        $pengelola->update($request->all());
        if($request->hasFile('foto')){
            if($request->foto){
                Storage::delete($request->foto);
            }
            $request->file('foto')->move('fotopedagang/',  $request->file('foto')->getClientOriginalName());
            $pengelola->foto =  $request->file('foto')->getClientOriginalName();
            $pengelola->save();
        }
        return redirect()->route('pengelola')->with('success', 'Data Berhasil Diubah');
    }

    public function showPengelola($id)
    {
        $pengelola = Pengelola::find($id);
        return view('editPengelola', compact('pengelola'));
    }

    public function delete($id)
    {
        $pengelola = Pengelola::find($id);
        if($pengelola->foto){
            Storage::delete($pengelola->foto);
        }
        $pengelola->delete();
        return redirect()->route('pengelola')->with('success', 'Data Berhasil Dihapus');
    }

    public function seePengelola($id)
    {
        $pengelola = Pengelola::find($id);
        return view('lihatPengelola', compact('pengelola'));
    }

    public function lihatPengelola(Request $request, $id)
    {
        $pengelola = Pengelola::find($id);
    }

    public function exportpdfPengelola()
    {
        $pengelola = Pengelola::all();
        
        view()->share('pengelola', $pengelola);
        $pdfPengelola = PDF::loadview('pengelola-pdf')->setPaper('a4', 'landscape'); 
        return $pdfPengelola->download('Pengelola.pdf');
    }
}