<?php


abstract class Joueur
{
    public function inscription(){
        return $this -> etreMajeur();
    }
    abstract public function etreMajeur();
}

//------
class JoueurFr extends Joueur
{
    public function etreMajeur(){
        return 18;
    }
}
//-----
class JoueurUs extends Joueur
{
    public function etreMajeur(){
        return 21;
    }
}
//-----
$joueurFr = new JoueurFr;
echo $joueurFr -> inscription() . '<br>';

$joueurUs = new JoueurUs;
echo $joueurUs -> inscription();

/**Commentaires :
 * - Une classe abstraite ne peut pas être instanciée
 * - Les méthodes abstraites n'ont pas de contenu (pas de corps)
 * - Pour déclarer une méthode abstraite il faut OBLIGATOIREMENT être dans une classe Abstraite
 * - Une classe abstraitre peut contenir des méthodes normales
 * - lors qu'on hérite d'une classe abstraitre on doit OBLIGATOIRMENT redéfinir les méthodes abstraites
 * 
 * Le développeur maître (lead dev') qui est coeur de l'application, va obliger les autres dev' à re-définir des méthodes. Ceci est une bonne pratique dans le cadre d'un travail colaboratif et hierarchisé
 * 
 * 
 */