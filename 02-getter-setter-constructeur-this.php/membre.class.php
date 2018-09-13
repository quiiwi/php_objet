<?php


// Consigne : Au regarde de la classe ci-dessous, veuillez affecter des valeurs à $pseudo et $email et les afficher dans la page.

class Membre{

private $pseudo;
private $email;

    public function setPseudo($pseudo){
        $this -> pseudo = $pseudo; 
    }
    public function getPseudo(){
        return $this -> pseudo;
    }


    public function setEmail($email){
        $this -> email = $email;
    }
    public function getEmail(){
        return $this -> email;
    }

}
$membre = new Membre;

$membre -> setEmail('quiiwiki@gmail.com');

$membre -> setPseudo('Quiiwiki');

echo $membre -> getEmail() . '<br>' . $membre -> getPseudo();