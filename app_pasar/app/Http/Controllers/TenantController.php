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
}
