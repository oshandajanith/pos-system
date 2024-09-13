<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    protected $table='suppliers';
    protected $fillable=[' supplier_name', 'supplier_address', 'phone', 'email'];
}

