<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Aset;

class Maintenance extends Model
{
    protected $table = 'maintenance';
    protected $primaryKey = 'id_maintenance';
    protected $fillable = ['aset_id', 'tanggal_maintenance', 'keterangan', 'dokumen_pendukung'];

    protected $casts = [
        'tanggal_maintenance' => 'Y-m-d',
    ];

    public function aset_tik(){
    	return $this->belongsTo(Aset::class);
    }
}