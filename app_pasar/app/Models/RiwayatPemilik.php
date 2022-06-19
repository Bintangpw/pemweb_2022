<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPemilik extends Model
{
    use HasFactory;
    protected $table = 'riwayat_pemilik';
    protected $guarded = [];
    protected $dates = ['crated at'];
}
