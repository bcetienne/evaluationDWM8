<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
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
        //Créé une pagination en ne prenant que le nombre d'enregistrement renseigné après la fonction paginate(x)
        //$paginations = DB::table('products')->paginate(4);
        return view('list', ['products' => $products]);
    }

    /**
     * Retourne la vue 'create' avec toutes les informations nécessaires pour créer un produit
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        //Marques
        $fullBrands = Brand::all();
        $brands = [];
        foreach ($fullBrands as $value){
            $brands[$value->id] = $value->brand;
        }
        //Genres
        $fullGenres = Genre::all();
        $genres = [];
        foreach ($fullGenres as $value){
            $genres[$value->id] = $value->genre;
        }
        //Niveaux
        $fullLevels = Level::all();
        $levels = [];
        foreach ($fullLevels as $value){
            $levels[$value->id] = $value->level;
        }
        return view('create', ['brands' => $brands, 'genres' => $genres, 'levels' => $levels]);
    }

    /**
     * Action d'envoyer le nouveau produit vers la base de données
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function createAction(Request $request)
    {
        $product = new Product;
        $product->name = $request->nameField;
        $product->quantity = $request->qtyField;
        $product->brand_id = $request->brandList;
        $product->level_id = $request->levelList;
        $product->save();
        $product->genres()->attach($request->genre);
        return redirect('/list');
    }

    /**
     * Retourne la vue 'update'
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function update($id)
    {
        $product = Product::find($id);
        //Niveaux
        $fullLevels = Level::all();
        $levels = [];
        foreach ($fullLevels as $value){
            $levels[$value->id] = $value->level;
        }
        //Marques
        $fullBrands = Brand::all();
        $brands = [];
        foreach ($fullBrands as $value){
            $brands[$value->id] = $value->brand;
        }
        //Genres
        $fullGenres = Genre::all();
        $genres = [];
        foreach ($fullGenres as $value){
            $genres[$value->id] = $value->genre;
        }
        return view('update', ['product' => $product, 'brands' => $brands, 'genres' => $genres, 'levels' => $levels]);
    }

    /**
     * Action qui envoie les informations modifiées vers la base de données
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function updateAction(Request $request)
    {
        $product = Product::find($request->id);
        $product->name = $request->nameField;
        $product->quantity = $request->qtyTotal;
        $product->brand_id = $request->brandList;
        $product->level_id = $request->levelList;
        $product->save();
        $product->genres()->detach();
        $product->genres()->attach($request->genre);
//        dd($request);
        return redirect('/');
    }

    /**
     * Action qui supprime l'entrée dans la base de données
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delete($id)
    {
        $product = Product::find($id);
        $product->genres()->detach();
        $product->delete();
        return redirect('/');
    }
}
