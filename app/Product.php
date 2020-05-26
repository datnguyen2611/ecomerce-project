<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function presentPrice(){
        $format = number_format($this->price /100,2);
        return $format;
    }
    public function scopeAlsoLike($query){
        return $query->inRandomOrder()->take(4);
    }
}
