<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function presentPrice(){
        $price = $this->price;
        return "$".(number_format($price-0.01,2));
    }
    public function scopemightAlsoLike($query)
    {
        # code...
        return $query->inRandomOrder()->take(4);
    }
}
