<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;
use Illuminate\Support\Facades\Storage;

class GuestController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')){
            $guest = Guest::where('nama', 'LIKE', '%' .$request->search. '%')->paginate(5);
        }else{
            $guest = Guest::paginate(5);
        }
        
        return view('guest', compact('guest'));
    }
}
