<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisAset extends Model
{
    protected $table = 'jenis_aset';
    protected $primaryKey = 'id_jenis';
    protected $fillable = ['jenis_aset', 'keterangan'];
}