<?php

//Attentions : les traits existent depuis php 5.4

trait TPanier
{
    public $nbProduit = 1;

    public function affichagePanier(){
        return 'Affichage du panier';
    }
}

//-------------

trait TMembre
{
    public function connexion(){
        return 'Je me connecte';
    }
}

//-------------

class Site{
    use TPanier;
    use TMembre;
    //use Tpanier, TMembre;
    //use permet d'importer le code contenu dans un trait
}

//-------------

$site = new Site;

echo $site -> affichagePanier() . '<br>';
echo $site -> connexion() . '<br>';

/**Commentaires :
 * - Les traits permette,t d'importer du code dans une classe
 * - Cela reposse l'héritage non multiple du PHP
 * - Une classe peut importer plusieurs traits
 * - Un trait peut importer un trait
 * 
 * 
 * 
 * 
 */



