<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //Pour faire pointer sur la bonne table
    protected $table = 'brands';
    //Pour que Laravel ne fasse pas attention, qu'il manque le UPDATED_AT et CREATED_AT
    public $timestamps = false;

    public function product()
    {
        /**
         * Retourne le produit qui appartient à la marque
         */
        return $this->hasOne('App\Product');
    }
}
