<?php

namespace App\Models;

use CodeIgniter\Model;

class Anggotakeluarga extends Model
{
    protected $table            = 'anggota';
    protected $allowedFields    = ['id', 'no_kk', 'nama', 'nik', 'tgl_lahir', 'kepala_keluarga', 'status', 'hamil'];
}
