<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    protected $table = 'category_produits';

    protected $fillable = ['produits_id', 'category_id'];
}
