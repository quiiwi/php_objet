<?php

class Homme{
    private $prenom;
    private $nom;

    public function setPrenom($argument){
        if(is_string($argument)){
            if(strlen($argument) > 2 && strlen($argument) < 30){
                $this -> prenom = $argument;
            }
            }
        }
    public function getPrenom(){
        return $this -> prenom;
    }
    public function setNom($nom){
        $this -> nom = $nom;
    }
    public function getNom(){
        return $this -> nom;
    }

}

//-------------
$homme = new Homme; //on déclare une nouvelle variable $homme
//$homme = new Homme;
//$homme -> prenom = 'Kilic'; // Erreur : impossible d'acccéder à un élément private depuis l'extérieur de la classe;

$homme -> setPrenom('Kilic'); // on définit $homme = Kilic

echo 'Bonjour ' . $homme -> getPrenom() . ' !<br/>';

$homme ->setNom('Aslan');;
echo 'Nom : '. $homme -> getNom();

/*
Commentaires :
    -Pourquoi faire des getters et des setters ?
    Le PHP esr un langage qui ne type pas ses variables... Il faut donc constament vérifier l'intégrité des données. Mettre une propriété en visibilité private, et donc passer par les accesseurs (getter/setter), permet de vérifier à un seul (une seule fois) les données.
    C'est une bonne containte !
    Tout dev' qui voudra effecter une valeur devra passer par le setter

    $this : représent l'objet en cours de manipulation.

    Getter : accéder <!DOCTYPE html>
    Setter : Affecter

    Nous aurons de getter et desser que de propriété private.

*/
