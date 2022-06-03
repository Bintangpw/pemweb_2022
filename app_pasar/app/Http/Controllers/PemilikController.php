<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemilik;

class PemilikController extends Controller
{
    public function index()
    {
        $pemilik= Pemilik::paginate();
        return view('pemilik', compact('pemilik'));
    }

    public function tambahPemilik()
    {
        return view('tambahPemilik');
    }

    public function insertPemilik(Request $request)
    {
        //dd($request->all());
        Pemilik::create($request->all());
        return redirect()->route('pemilik')->with('success', 'Data Berhasil Disimpan');
    }

    public function editPemilik(Request $request, $id)
    {
        $pemilik = Pemilik::find($id);
        $pemilik->update($request->all());
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
        $pemilik->delete();
        return redirect()->route('pemilik')->with('success', 'Data Berhasil Dihapus');
    }
}