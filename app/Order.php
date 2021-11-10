<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded=['id'];

    public function dpOrderlist() {
        return $this->belongsTo(ProductDeal::class);
    }
    public function wpOrderlist() {
        return $this->belongsTo(WastageProduct::class);
    }

}
