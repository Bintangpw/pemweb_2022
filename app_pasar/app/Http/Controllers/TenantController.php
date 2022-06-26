<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenant;
use Illuminate\Support\Facades\Storage;
use PDF;

class TenantController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')){
            $tenant = Tenant::where('nama', 'LIKE', '%' .$request->search. '%')->paginate(5);
        }else{
            $tenant = Tenant::paginate(5);
        }
        return view('tenant', compact('tenant'));
    }

    public function tambahTenant()
    {
        return view('tambahTenant');
    }

    public function insertTenant(Request $request)
    {
        //dd($request->all());
        $tenant = Tenant::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fototenant/',  $request->file('foto')->getClientOriginalName());
            $tenant->foto =  $request->file('foto')->getClientOriginalName();
            $tenant->save();
        }
        return redirect()->route('tenant')->with('success', 'Data Berhasil Disimpan');
    }

    public function editTenant(Request $request, $id)
    {
        $tenant = Tenant::find($id);
        $tenant->update($request->all());
        if($request->hasFile('foto')){
            if($request->foto){
                Storage::delete($request->foto);
            }
            $request->file('foto')->move('fototenant/',  $request->file('foto')->getClientOriginalName());
            $tenant->foto =  $request->file('foto')->getClientOriginalName();
            $tenant->save();
        }
        return redirect()->route('tenant')->with('success', 'Data Berhasil Diubah');
    }

    public function showTenant($id)
    {
        $tenant = Tenant::find($id);
        return view('editTenant', compact('tenant'));
    }

    public function delete($id)
    {
        $tenant = Tenant::find($id);
        if($tenant->foto){
            Storage::delete($tenant->foto);
        }
        $tenant->delete();
        return redirect()->route('tenant')->with('success', 'Data Berhasil Dihapus');
    }

    public function seeTenant($id)
    {
        $tenant = Tenant::find($id);
        return view('lihatTenant', compact('tenant'));
    }

    public function lihatTenant(Request $request, $id)
    {
        $tenant = Tenant::find($id);
    }

    public function exportpdfTenant()
    {
        $tenant = Tenant::all();
        
        view()->share('tenant', $tenant);
        $pdfTenant = PDF::loadview('tenant-pdf')->setPaper('a4', 'landscape'); 
        return $pdfTenant->download('Kios.pdf');
    }
}
