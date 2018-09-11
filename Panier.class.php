<?php
//01-classes-objet-instance-visibilite
    // Panier.class.php

class Panier{

    public $nbProduit; //Propriété (par défaut : NULL)

    public function ajouterProduit(){
        //traitement de la fonction
        return 'Le produit a été ajouté !';
    }

    protected function retirerProduit(){
        return 'Le produit a été retiré !';
    }

    private function affichagePanier(){
        return 'Voici les produits dans le panier !';
    }

}
//---------------------------
$panier = new Panier; //$panier est un objet de la classe Panier. C'est une Instance de la classe Panier. On parle d'instanciation.

// print_r pour les array
// var_dump pour les objets

echo '<pre>';
//print_r($panier);
var_dump($panier);
var_dump(get_class_methods($panier)); //affiche les fonctions de panier
echo '</pre>';

$panier -> nbProduit = 5; //j'affecte la valeur 5 dans la propriété nbProduit de mon objet $panier

echo 'Le nombre de produits dans le panier est : ' . $panier -> nbProduit . '!<br/>';

echo 'Panier : ' . $panier -> ajouterProduit() . '<br/>';

// echo 'Panier : ' . $panier -> retirerProduit() . '<br/>';

echo 'Panier : ' . $panier -> affichagePanier() . '<br/>';

/*
Commentaires :

    - New est un mot clé qui permet de créer un objet issu d'une classe. Instranciation

    - On peut crée plusieurs objets d'une même classe.

    - Niveau de visibilité:
        --> Public : Accessible partout
        --> Protected : Accessible à l'intérieur de la classe où l'élément est déclaré, , ainsi que dans les classes enfants.
        --> Private : Acessible uniquelent dans le classe où l'éléme,t des déclaré.




*/