<?php

class Vehicule
{
    private $litre;
    private $reservoir;

    public function __construct($litre,$reservoir){
        $this -> setLitre($litre);
        $this -> setReservoir($reservoir);

    }
//------------------------------------------
    public function setLitre($litre){
        $this -> litre = $litre;
    }

    public function getLitre(){
        return $this -> litre;
    }
//------------------------------------------
    public function setReservoir($reservoir){
        $this -> reservoir = $reservoir;
    }

    public function getReservoir(){
        return $this -> reservoir;
    }
}

$litre2 = new Vehicule(4166576511,45517251675);
$a = $litre2 -> getLitre();
$b = $litre2 -> getReservoir();
$c = $b - $a;
echo 'Il y a : ' . $a . ' L dans le véhicule.<br>';
echo 'Le réservoir peut contenir : ' . $b . ' L.<br>';
echo 'Vous pouvez encore mettre : '. $c . ' L. <br>';





class Pompe
{
    private $litre;

    public function setLitre($litre){
        $this -> litre = $litre;
    }

    public function getLitre(){
        return $this -> litre;
    }

    public function donneEssence(Vehicule $v){
        $this -> setLitre( $this -> getLitre() - ($v -> getReservoir() - $v -> getLitre() ));
        $v -> setLitre( $v -> getReservoir() ); 
    }

}



//correction--------------------------
$p = new Pompe;
$p -> setLitre(94554945216251);
echo 'La pompe contient ' . $p -> getLitre() . ' L d\'essence <br>';


$p -> donneEssence($litre2);
echo 'Après ravitaillement, le véhicule contient ' . $litre2 -> getLitre() . ' L.<br> La pompe contient ' . $p -> getLitre() . ' L d\'essence ';