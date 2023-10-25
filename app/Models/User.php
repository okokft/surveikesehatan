<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table            = 'users';
    protected $allowedFields    = ['id', 'username', 'nama', 'password', 'level'];
}
