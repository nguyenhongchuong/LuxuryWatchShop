<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = "products";

    public function product_type()
    {
        return $this->belongsTo('App\ProductType', 'type_id', 'id');
    }

    public function bill_detail()
    {
        return $this->hasMany('App\BillDetail', 'product_id', 'id');
    }
}
