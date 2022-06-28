<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;
use DB;

class GuestController extends Controller
{
    public function index(Request $request)
    {
        $pemilik = DB::table('pemilik')->count();
        $pasar = DB::table('pasar')->count();
        $tenant = DB::table('tenant')->count();
        $pengelola = DB::table('pengelola')->count();
        $guest = Guest::paginate(5);
        return view('guest', compact('guest', 'pemilik', 'pasar', 'tenant', 'pengelola'));
    }

    public function insertContact(Request $request)
    {
        //dd($request->all());
        Guest::create($request->all());
        return redirect()->route('guest')->with('success', 'Pesanmu telah dikirim terima kasih');
    }
}
