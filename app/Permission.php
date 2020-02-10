<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = [
        'id', 'id_role', 'dashboard', 'kitchen', 'settings', 'menu', 'orders', 'products', 'dishes'
    ];
}
