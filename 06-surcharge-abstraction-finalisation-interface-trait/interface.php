<?php

// On utlise le ot clé 'interface' et non 'class'
interface Mouvement
{
    public function start();
    public function turnRight();
    public function turnLeft();
    // Dans une interface, les méthodes n'ont jamais de contenu (de corps)
}

class Bateau implements Mouvement //On utilise le mot clef 'implements' et non 'extends'
{
    public function start(){ // Quand on implements une interface on a l'obligation de redefinir toutes les méthodes de l'interface.

    }
    public function turnRight(){

    }
    public function turnLeft(){

    }
}

class Avion implements Mouvement
{
    public function start(){

    }
    public function turnRight(){

    }
    public function turnLeft(){

    }
}

/**Commentaires :
 * - Une interface est une liste de méthodes (sans contenu) qui permet de garantur que toutes les classes qui vont implémenter l'interface contiendront les même noms de méthodes. C'est une sorte de contrat qui est passé entre le lead dev' et les autres dev'. c'est un plan de fabrication d'une classe.
 * 
 * - Une interface ne peut pas être instanciée 
 * - Une classe peut implémenter plusieurs interfaces 
 * - Une classe peut à la fois extends une classe mère et implements une ou plusieurs interface(s)
 * - Les méthodes d'une interface doit forcement être public sinon on ne peut pas les redéfinir
 * 
 * 
 * 
 * 
 */