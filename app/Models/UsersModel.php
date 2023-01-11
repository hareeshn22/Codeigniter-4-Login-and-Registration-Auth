<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';

    protected $allowedfields = [
        'name',
        'email',
        'password',
        'created_at',
    ];



}