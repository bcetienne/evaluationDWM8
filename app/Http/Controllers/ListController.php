<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Level;
use App\Genre;
use App\Brand;

class ListController extends Controller
{
    /**
     * Retourne la vue 'list' avec les informations de la table 'products'
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $products = Product::all();
        return view('list', ['products' => $products]);
    }

    /**
     * Retourne la vue 'update'
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function updateOne()
    {
        return view('update');
    }

    /**
     * Action qui envoie les informations modifiées
     */
    public function updateOneAction()
    {

    }

    /**
     * Action qui supprime l'entrée dans la base de données
     */
    public function delete()
    {

    }
}
