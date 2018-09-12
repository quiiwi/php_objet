<?php

class Animal
{
    public function manger(){
        return 'Je mange !';
    }

    protected function deplacement(){
        return 'Je me déplace';
    }
}

//-----------------

class Elephant extends Animal //Extends signifie que la class Elephant hérite de la classe Animal
{
    public function quiSuisJe(){
        return 'Je suis un éléphant et ' . $this -> deplacement();
    }

}

//-----------------

class Chat extends Animal
{
    public function quiSuisJe(){
        return 'Je suis un chat et ' . $this -> deplacement();
    }

    public function manger(){
        return 'Je mange peu !';
    }
    // Redéfinition de la méthode manger()

}

//-----------------

//Elephant
$eleph = new Elephant;
echo 'Elephant >' . $eleph -> manger() . '<br>';
echo 'Elephant >' . $eleph -> quiSuisje() . '<br>';

//Chat
$chat = new Chat;
echo 'Chat >' . $chat -> manger() . '<br>';
echo 'Chat >' . $chat -> quiSuisje() . '<br>';

/**
 * Commentaires :
 *  - L'héritage est l'un des fondements de la programmation en objet.
 *  - Lorsqu'une classe hérite d'une autre classe, c'est comme si tout le code était importé, Les élements (Non private) sont donc accessibles avec $this ->
 *  - Redéfinition : Une classe enfant (héritière) peut modifier le comportement global d'une méthode dont elle a héritée.
 *  - Surcharge : Une classe enfant (héritière) peut modifier EN PARTIE le comportement d'une méthode dont elle a héritée (Voir chapitre 06, fichier surcharge.php)
 *  /!\ redéfinition != surcharge
 * Dans le cas de l'héritage, l'interprêteur va regarder dans la classe enfant si les méthodes exécutées existent, et s'il ne les trouve pas il regarde dans la classe parente.
 * 
 *  
 * 
 * */

