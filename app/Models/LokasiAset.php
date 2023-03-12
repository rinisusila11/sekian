<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Aset;
use App\Models\Opd;

class LokasiAset extends Model
{
    protected $table = 'lokasi_aset';
    protected $primaryKey = 'id_lokasi';
    protected $fillable = ['opd_id', 'lokasi'];
}