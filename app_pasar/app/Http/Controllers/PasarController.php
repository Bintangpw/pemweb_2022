<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasar;
class PasarController extends Controller
{
    public function index()
    {
        $pasar= Pasar::paginate();
        return view('pasar', compact('pasar'));
    }

    public function tambahPasar()
    {
        return view('tambahPasar');
    }

    public function insertPasar(Request $request)
    {
        //dd($request->all());
        Pasar::create($request->all());
        return redirect()->route('pasar')->with('success', 'Data Berhasil Disimpan');
    }

    public function editPasar(Request $request, $id)
    {
        $pasar = Pasar::find($id);
        $pasar->update($request->all());
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
        $pasar->delete();
        return redirect()->route('pasar')->with('success', 'Data Berhasil Dihapus');
    }
}
