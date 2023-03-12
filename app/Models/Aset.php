<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\JenisAset;
use App\Models\Opd;
use App\Models\Maintenance;

class Aset extends Model
{
    protected $table = 'aset_tik';
    protected $primaryKey = 'id_aset';
    protected $fillable = ['jenis_id', 'opd_id', 'lokasi_id','nama_aset', 'type', 'merk', 'seri', 'tanggal_beli', 'harga_beli', 'tanggal_garansi'];

    protected $casts = [
        'tanggal_beli' => 'Y-m-d',
        'tanggal_garansi' => 'Y-m-d',
    ];

    public function jenis_aset(){
    	return $this->belongsTo(JenisAset::class);
    }

    public function opd(){
        return $this->belongsTo(Opd::class);
	}

    public function lokasi_aset(){
        return $this->belongsTo(LokasiAset::class);
	}
}