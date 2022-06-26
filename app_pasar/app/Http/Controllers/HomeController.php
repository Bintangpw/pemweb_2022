<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pemilik = DB::table('pemilik')->count();
        $pasar = DB::table('pasar')->count();
        $tenant = DB::table('tenant')->count();
        return view('home', compact('pemilik', 'pasar', 'tenant'));
    }
}
