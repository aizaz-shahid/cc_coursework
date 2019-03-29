<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $orders = 'orders';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
