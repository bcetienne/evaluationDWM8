# Evaluation DWM8 

> Etienne Blanc-Coquand <br>
> 14/12/2017 -> 15/12/2017 

## Le projet 
Le projet consiste en la création d'une boutique de musique, ici, cette boutique vend du matériel musical de toutes sortes, pour tous les genres et pour différents niveaux.

Pour cela, il faut faire un système CRUD (Create Read Update Delete) qui permet de gérer le stock de la boutique, en plus de cela, il faut que le site soit responsive (s'adapte à différentes tailles d'écrans), qu'il soit agréable à l'oeil sans pour autant être une création artistique.

## Les technologies utilisées 
Les principales technologies utilisées pour mener à bien ce projet de validation sont le langage CSS et HTML, le framework CSS [Bootstrap](https://getbootstrap.com), Javascript, le framework PHP [Laravel](https://laravel.com) ([Eloquent](https://laravel.com/docs/5.5/eloquent), [Forms & HTML](https://laravelcollective.com/docs/master/html) avec [Laravel Collective](https://laravelcollective.com)), MySQL, [Vagrant](https://www.vagrantup.com). 

## Fonctionnement
L'utilisateur peut se déplacer aisément dans le site via la barre de navigation au sommet, il a la possibilité de voir la liste des produits en stock, en ajouter, en supprimer via le bouton de suppression de la liste ou bien modifier, ici aussi via le bouton dédié de la liste.

## Notes pour le formateur (ce dont de je suis fier et informations)
* Entrer une URL d'une page qui n'existe pas (exemple : /test) 

    /!\ ATTENTION SPOIL /!\ : Si ça ne fonctionne pas voici ce que cela devrait [afficher](https://image.noelshack.com/fichiers/2017/50/5/1513347147-capture-d-ecran-2017-12-15-a-15-11-01.png).
* Ajout de [Select2](https://select2.org/) pour une recherche plus en profondeur pour les marques.
* La modification du stock se fait via un input caché.
* Les seeders et factories présents n'ont pas été utilisé pour éviter de perdre trop de temps

## Difficultés rencontrées
* ~~Lors de l'ajout de produits, ceux-ci ne récupèrent pas les différents genres renseignés (qu'il y en ait plusieurs ou non).~~ Réparé
* ~~Lors de la modification d'un produit, les valeurs enregistrées ne se mettent pas par défaut comme valeur dans les listes déroulantes (exemple le niveau, il faut 'bricoler' quelque chose qui n'est pas vraiment propre et sans intervention sur le select, la valeur n'est pas bien renvoyé (null) pour retourner un résultat lors de l'affichage de la liste à cause cette valeure null).~~ Réparé aussi bien que la valeur ne se mette pas de base sur celle renseignée.
* Mise en place de la pagination avec Eloquent avec les codes suivants : dans le contrôleur `$paginations = DB::table('products')->paginate(4);` puis appeler la variable dans la vue en la passant dans l'array du return du controleur

    ```PHP
        @foreach($paginations as $pagination)
            ...Elements du tableau
            {{ $pagination->name }}
            ...Elemenrs du tableau
        @endforeach
    ```
    Et affichage de la pagination après le `@endforeach` avec `{{ $paginations->render() }}`.
    
    Le soucis est que `$paginations` retournait les `id` des niveaux par exemple (`level_id`) mais ne retournait pas le nom.