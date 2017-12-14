<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    //Pour faire pointer sur la bonne table
    protected $table = 'genres';
    //Pour que Laravel ne fasse pas attention, qu'il manque le UPDATED_AT et CREATED_AT
    public $timestamps = false;

    public function products()
    {
        /**
         * Retourne le style de musique et/ou d'instrument pour un produit
         */
        return $this->belongsToMany('App\Product');
    }
}
