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
}
