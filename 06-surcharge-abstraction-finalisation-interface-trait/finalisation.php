<?php

final class Application
{
    public function run(){
        return 'L\'application se lance!';
    }
}

//class Extension extends Application{} // Erreur : On ne peut pas hérité d'une calsse final

$app = new Application; // une classe finale peut être instanciée
echo $app -> run();




//--------------

class Application2
{
    final public function run2(){
        return 'L\'application se lance!';
    }
}

class Extentsion2 extends Application2
{
    //public function run2(){} // ERREUR : on ne peut pas redéfinir ou surcharger une méthode final
}

/**Commentaires :
 * - Une calsse finale ne peut pas être hériité
 * - Une classe finale peut être instanciée
 * - Par définition une classe finale ne contient que des méthodes finales... puisqu'on ne peut pas en hériter
 * 
 * - Une méthode finale ne peut pas être sur changée ou redéfinie
 * - Une méthode finale peut être présente dna sune classe normale
 * 
 * 
 * 
 * 
 */

