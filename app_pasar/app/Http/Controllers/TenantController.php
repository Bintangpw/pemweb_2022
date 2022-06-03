<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenant;
class TenantController extends Controller
{
    public function index()
    {
        $tenant= Tenant::paginate();
        return view('tenant', compact('tenant'));
    }

    public function tambahTenant()
    {
        return view('tambahTenant');
    }

    public function insertTenant(Request $request)
    {
        //dd($request->all());
        Tenant::create($request->all());
        return redirect()->route('tenant')->with('success', 'Data Berhasil Disimpan');
    }

    public function editTenant(Request $request, $id)
    {
        $tenant = Tenant::find($id);
        $tenant->update($request->all());
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
        $tenant->delete();
        return redirect()->route('tenant')->with('success', 'Data Berhasil Dihapus');
    }
}
