<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    //Pour faire pointer sur la bonne table
    protected $table = 'levels';
    //Pour que Laravel ne fasse pas attention, qu'il manque le UPDATED_AT et CREATED_AT
    public $timestamps = false;

    public function product()
    {
        /**
         * Retourne le niveau de maitrise recommandé d'un produit
         */
        return $this->hasOne('App\Product');
    }
}
