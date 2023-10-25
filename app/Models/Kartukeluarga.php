<?php

namespace App\Models;

use CodeIgniter\Model;

class Kartukeluarga extends Model
{
    protected $table            = 'kk';
    protected $allowedFields    = ['id', 'no_kk', 'no_telepon', 'alamat', 'que1', 'que2', 'que3', 'que4', 'que5', 'que6', 'que7', 'que8', 'que9', 'que10'];
}
