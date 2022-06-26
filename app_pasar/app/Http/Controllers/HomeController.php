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
        $users = DB::table('users')->count();
        $pasar = DB::table('pasar')->count();
        $tenant = DB::table('tenant')->count();
        return view('home', compact('users', 'pasar', 'tenant'));
    }
}
