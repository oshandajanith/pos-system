<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order_details extends Model
{
    protected $table='order_details';
    protected $fillable=[' order_id', 'product_id', 'unitprice', 'quantity', 'amount', 'discount'];
}
