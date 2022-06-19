<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatIuran extends Model
{
    use HasFactory;
    protected $table = 'riwayat_iuran';
    protected $guarded = [];
    protected $dates = ['crated at'];
}
