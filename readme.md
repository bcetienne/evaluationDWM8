# Evaluation DWM8 

> Etienne Blanc-Coquand <br>
> 14/12/2017 -> 15/12/2017 

## Le projet 
Le projet consiste en la création d'une boutique de musique, ici, cette boutique vend du matériel musical de toutes sortes, pour tous les genres et pour différents niveaux.

Pour cela, il faut faire un système CRUD (Create Read Update Delete) qui permet de gérer le stock de la boutique, en plus de cela, il faut que le site soit responsive (s'adapte à différentes tailles d'écrans), qu'il soit agréable à l'oeil sans pour autant être une création artistique.

## Les technologies utilisées 
Les principales technologies utilisées pour mener à bien ce projet de validation sont le langage CSS et HTML, le framework CSS [Bootstrap](https://getbootstrap.com), la librairie Javascript [jQuery](https://jquery.com), le framework PHP [Laravel](https://laravel.com) ([Eloquent](https://laravel.com/docs/5.5/eloquent), [Forms & HTML](https://laravelcollective.com/docs/master/html) avec [Laravel Collective](https://laravelcollective.com)), MySQL, [Vagrant](https://www.vagrantup.com). 

## Fonctionnement
L'utilisateur peut se déplacer aisément dans le site via la barre de navigation au sommet, il a la possibilité de voir la liste des produits en stock, en ajouter, en supprimer via le bouton de suppression de la liste ou bien modifier, ici aussi via le bouton dédié de la liste.

## Notes pour le formateur 
* Entrer une URL pour être rediriger sur une page qui n'existe pas (exemple : /test).

## Difficultés rencontrées
* Lors de l'ajout de produits, ceux-ci ne récupère pas les différents genres renseignés (qu'il y en ait plusieurs ou non).
* Lors de la modification d'un produit, les valeurs enregistrées ne se mettent pas par défaut comme valeur dans les listes déroulantes (exemple le niveau, il faut 'bricoler' quelque chose qui n'est pas vraiment propre et sans intervention sur le select, la valeur n'est pas bien renvoyé (null) pour retourner un résultat lors de l'affichage de la liste à cause cette valeure null).