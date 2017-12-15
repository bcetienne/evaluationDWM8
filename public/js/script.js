//TODO: Ajouter un changement de classe sur la barre de navigation pour que la classe <active> suive la page affichée
//TODO: Ajouter le calcul automatique du stock

/**
 * Permet de calculer et d'ajouter le bon nombre au stock lors du clic sur le bouton
 * Exemple si le calcul ne se fait pas : Il y a 3 articles, l'utilisateur pense en ajouter 4 alors, la valeur 4 sera
 * récupéré et remplacera le 3 dans la base de données, donc au lieu de 7 articles il y en aura seulement 4 en stock.
 */
function calcStock() {
    var stockActuel = Number(document.getElementById('qtyFieldExists').value);
    var stockAjout = Number(document.getElementById('qtyFieldAdd').value);
    var stockTotal = Number(stockActuel + stockAjout);

    document.getElementById('qtyTotal').value = stockTotal;
}