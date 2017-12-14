<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //Pour faire pointer sur la bonne table
    protected $table = 'products';
    //Pour que Laravel ne fasse pas attention, qu'il manque le UPDATED_AT et CREATED_AT
    public $timestamps = false;

    public function brand()
    {
        /**
         * Retourne la marque a qui appartient le produit
         */
        return $this->belongsTo('App\Brand');
    }

    public function level()
    {
        /**
         * Retourne le niveau recommandé qu'il faut avoir pour utiliser le produit
         */
        return $this->belongsTo('App\Level');
    }

    public function genres()
    {
        /**
         * Retourne le style de musique et/ou l'instrument pour un produit
         */
        return $this->belongsToMany('App\Genre');
    }
}
