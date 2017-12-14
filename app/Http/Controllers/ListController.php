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
        //Récupère tous les enregistrements des produits
        $products = Product::all();
        return view('list', ['products' => $products]);
    }

    /**
     * Retourne la vue 'create' avec toutes les informations nécessaires pour créer un produit
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        //Récupère tous les enregistrements des marques
        $fullBrands = Brand::all();
        //Les places dans un tableau
        $brands = [];
        //Rempli le tableau avec comme clé, l'id de la marque et sa valeur est son nom
        foreach ($fullBrands as $value){
            $brands[$value->id] = $value->brand;
        }
        //Récupère tous les enregistrements des genres
        $fullGenres = Genre::all();
        //Les places dans un tableau
        $genres = [];
        //Rempli le tableau avec comme clé, l'id du genre et sa valeur est son nom
        foreach ($fullGenres as $value){
            $genres[$value->id] = $value->genre;
        }
        //Récupère tous les enregistrements des niveaux
        $fullLevels = Level::all();
        //Les places dans un tableau
        $levels = [];
        //Rempli le tableau avec comme clé, l'id du niveau et sa valeur est son nom
        foreach ($fullLevels as $value){
            $levels[$value->id] = $value->level;
        }
        //Retourne la vue avec toutes les informations récupérées
        return view('create', ['brands' => $brands, 'genres' => $genres, 'levels' => $levels]);
    }

    /**
     * Action d'envoyer le nouveau produit vers la base de données
     */
    public function createAction(Request $request)
    {
        $product = new Product;
        $product->name = $request->nameField;
        $product->quantity = $request->qtyField;
        $product->brand_id = $request->brandList;
        $product->level_id = $request->levelList;
        $product->save();
        $product->genres()->attach($request->genreList);
        return redirect('/');
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
     * Action qui envoie les informations modifiées vers la base de données
     */
    public function updateOneAction()
    {

    }

    /**
     * Action qui supprime l'entrée dans la base de données
     */
    public function delete(Request $request, $id)
    {
        $product = Product::find($id);
        $product->genres()->detach();
        $product->delete();
        return redirect('/');
    }
}
