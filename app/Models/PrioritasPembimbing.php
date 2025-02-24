<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrioritasPembimbing extends Model
{
    protected $table = 'prioritas_pembimbing';
    protected $primaryKey = 'id_prioritas_pembimbing';
    protected $fillable = [
        'id_pengajuan',
        'nip',
        'urutan_prioritas'
    ];
}
