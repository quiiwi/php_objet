<?php

//Desing Pattern : Litteralement "Modèle de conception". Un desing Pattern c'est une solution qui a été trouvée à un problème rencontré par la communauté.

//Singleton : C'est la réponse qui a été trouvée à la question : comment créer une classe pour laquelle il n'existe qu'un seul objet unique!

class Singleton
{
    private static $instance = NULL;

    private function __construct(){} //La fonction étant provate, alors notre classe n'est plus instanciable.
    
    private function __clone(){} // La fonction étant private, il devient impossible de cloner un objet de cette classe.

    public static function getInstance(){
        //if(is_null(self::$instance)){
        //if(self::$instance == NULL){
        if(!self::$instance){
            //self::$instance = new self;
            self::$instance = new Singleton;
        }
        return self::$instance;
    }
}

//$singleton = new Singleton; // IMPOSSIBLE

$singleton = Singleton::getInstance(); // $singleton est un objet de la classe Singleton
$singleton2 = Singleton::getInstance();

//$pdo = $singleton -> getPdo();

echo '<pre>';
var_dump($singleton);
var_dump($singleton2);
echo '</pre>';

// $singleton2 et $singleton font référence au même objet(#1).