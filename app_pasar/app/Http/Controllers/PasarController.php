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
}
