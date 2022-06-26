<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasar;
use Illuminate\Support\Facades\Storage;
use PDF;

class PasarController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')){
            $pasar = Pasar::where('nama', 'LIKE', '%' .$request->search. '%')->paginate(5);
        }else{
            $pasar = Pasar::paginate(5);
        }
        
        return view('pasar', compact('pasar'));
    }

    public function tambahPasar()
    {
        return view('tambahPasar');
    }

    public function insertPasar(Request $request)
    {
        //dd($request->all());
        $pasar = Pasar::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotopasar/',  $request->file('foto')->getClientOriginalName());
            $pasar->foto =  $request->file('foto')->getClientOriginalName();
            $pasar->save();
        }
        return redirect()->route('pasar')->with('success', 'Data Berhasil Disimpan');
    }

    public function editPasar(Request $request, $id)
    {
        $pasar = Pasar::find($id);
        $pasar->update($request->all());
        if($request->hasFile('foto')){
            if($request->foto){
                Storage::delete($request->foto);
            }
            $request->file('foto')->move('fotopasar/',  $request->file('foto')->getClientOriginalName());
            $pasar->foto =  $request->file('foto')->getClientOriginalName();
            $pasar->save();
        }
        return redirect()->route('pasar')->with('success', 'Data Berhasil Diubah');
    }

    public function showPasar($id)
    {
        $pasar = Pasar::find($id);
        return view('editPasar', compact('pasar'));
    }

    public function delete($id)
    {
        $pasar = Pasar::find($id);
        if($pasar->foto){
            Storage::delete($pasar->foto);
        }
        $pasar->delete();
        return redirect()->route('pasar')->with('success', 'Data Berhasil Dihapus');
    }

    public function seePasar($id)
    {
        $pasar = Pasar::find($id);
        return view('lihatPasar', compact('pasar'));
    }

    public function lihatPasar(Request $request, $id)
    {
        $pasar = Pasar::find($id);
    }

    public function exportpdfPasar()
    {
        $pasar = Pasar::all();
        
        view()->share('pasar', $pasar);
        $pdfPasar = PDF::loadview('pasar-pdf')->setPaper('a4', 'landscape'); 
        return $pdfPasar->download('Pasar.pdf');
    }
}
