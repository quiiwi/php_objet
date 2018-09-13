<?php

namespace Application;

use Espace1, Espace2;

// use Espace1;
// use Espace2;
// use PDO;


require 'espace1.php';
require 'espace2.php';

$c = new Espace1\A;
echo $c -> test1() . '<br>';

$d = new Espace2\A;
echo $d -> test2();

/**Commentaires :
 * 
 *  - Les namespace sont des espaces virtuel qui nous permettent d'organniser/ranger nos classes. De cette manière si deux dev' créent deux nommées a l'identique cela ne pose aucun problème
 * 
 *  - On peux voir les namespace comme des tiroirs pour ranger les classes .
 * 
 *  - On déclare les namespace obligatoirement en haut de chaque fichier. ou on utilise des antislash lorsque l'on fait appelle a la fonction 
 *      ex : $c = new \Espace1\A
 * 
 *  - Lorsqu'on utilise les namespace:
 *      1/ On appelle une classe avec son nom complet 
 *          ex : $a = new Espace1\A
 *      2/ On doit importer le namespace
 *          ex : use Espace1;
 *          ex : une PDO;
 * 
 */