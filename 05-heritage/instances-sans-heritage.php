<?php

class C{}
//-----
class A
{
    public function bonjour(){
        return 'Bonjour';
    }
}
//-----
class B extends C //B n'hérite pas de A
{
    public $maVariable; // Contient un objet de la classe A

    public function __construct(){
        $this -> maVariable = new A;
    }
}
$b = new B;
echo $b -> maVariable -> bonjour();

/**
 * Commentaires :
 *  Nous avons un objet dans un objet, d'où l'utilisation de deux flèches succèssivement ($x -> $y - mthode())
 * 
 *  L'intéret d'avoir une instance sanshéritage (récupérer un objet dans la propriété d'une classe) est de pouvoir hériter d'une calsse mère d'un côté, tout en ayant la possibilité de récupérer les éléments d'une autre classe en même temps.
 * 
 * 
 * 
 * 
 */