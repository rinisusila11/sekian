<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opd extends Model
{
    protected $table = 'opd';
    protected $primaryKey = 'id_opd';
    protected $fillable = ['nama_opd'];
}