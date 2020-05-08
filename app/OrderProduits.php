<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduits extends Model
{
    protected $table = 'order_product';

    protected $fillable = ['order_id', 'produits_id', 'quantity'];
}
