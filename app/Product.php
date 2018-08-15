<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
class Product extends Model
{
   use Searchable;

    //
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
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
