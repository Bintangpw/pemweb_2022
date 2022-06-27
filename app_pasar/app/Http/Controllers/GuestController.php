<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;

class GuestController extends Controller
{
    public function index(Request $request)
    {
        $guest = Guest::paginate();
        return view('guest', compact('guest'));
    }

    public function insertContact(Request $request)
    {
        //dd($request->all());
        Guest::create($request->all());
        return redirect()->route('guest')->with('success', 'Pesanmu telah dikirim terima kasih');
    }
}
